<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::with('images')->paginate(20);
        return view('backend.products.index', compact('products'));
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'description' => 'required|string',
                'compararison' => 'required|string',
                'category' => 'nullable|array',
                'category.*' => 'string|max:255',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $product = new Products();
            $product->title = $request->title;
            $product->content = $request->content;
            $product->description = $request->description;
            $product->compararison = $request->compararison;
            $product->category = json_encode($request->category);
            $product->user_id = auth()->id();
            $product->save();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/products', 'public');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $path
                    ]);
                }
            }

            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving product: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $product = Products::with('images')->findOrFail($id);
        // Ensure images relationship is initialized
        
        return view('backend.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'description' => 'required|string',
                'compararison' => 'required|string',
                'category' => 'nullable|string|max:255',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $product = Products::findOrFail($id);
            $product->title = $request->title;
            $product->content = $request->content;
            $product->description = $request->description;
            $product->compararison = $request->compararison;
            $product->category = json_encode($request->category);
            $product->save();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/products', 'public');// Remove 'public/' from the path
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $path
                    ]);
                }
            }

            return redirect()->route('products.index')->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating product: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        $product = Products::with('images')->findOrFail($id);
    
        // Safely loop through images if they exist
        if ($product->images && $product->images->count()) {
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
        }
    
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    

    public function deleteImage($id)
    {
        try {
            $image = ProductImage::findOrFail($id);
            
            // Delete the file from storage
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
            
            // Delete the record from database
            $image->delete();
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
    public function product($name){
        $product = Products::where('title', $name)->first();
        return view('frontend.pages.single-product', compact('product'));

    }
    public function category($name)
    {
        $products = Products::whereJsonContains('category', $name)->get();
        return view('frontend.pages.products', compact('products'));
    }
    
}

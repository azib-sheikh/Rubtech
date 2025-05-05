<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustryController extends Controller
{
    public function index()
    {
        try {
            // Debug: Log the start of the method
            \Log::info('IndustryController@index called');
            
            // Get industries with user relationship
            $industries = Industry::with('user')->latest()->paginate(10);
            
            // Debug: Log the industries count
            \Log::info('Industries count: ' . $industries->count());
            
            // Debug: Log the view being rendered
            \Log::info('Rendering view: backend.industries.index');
            
            return view('backend.industries.index', compact('industries'));
        } catch (\Exception $e) {
            // Debug: Log any errors
            \Log::error('Error in IndustryController@index: ' . $e->getMessage());
            \Log::error($e->getTraceAsString());
            
            return redirect()->back()->with('error', 'Error loading industries: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('backend.industries.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $industry = new Industry();
            $industry->title = $request->title;
            $industry->content = $request->content;
            $industry->user_id = auth()->id();

            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('uploads/industry', 'public'); 
                $industry->image = $path;
            }

            $industry->save();

            return redirect()->route('industries.index')->with('success', 'Industry created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating industry: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        return view('backend.industries.edit', compact('industry'));
    }

    public function update(Request $request, $id)
{
    try {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $industry = Industry::findOrFail($id);
        $industry->title = $request->title;
        $industry->content = $request->content;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($industry->image && Storage::disk('public')->exists($industry->image)) {
                Storage::disk('public')->delete($industry->image);
            }

            // Store new image in the same path as 'store' method
            $path = $request->file('image')->store('uploads/industry', 'public');
            $industry->image = $path;
        }

        $industry->save();

        return redirect()->route('industries.index')->with('success', 'Industry updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error updating industry: ' . $e->getMessage())->withInput();
    }
}


    public function destroy($id)
    {
        try {
            $industry = Industry::findOrFail($id);
            
            // Delete image if exists
            if ($industry->image) {
                Storage::disk('public')->delete($industry->image);
            }
            
            $industry->delete();

            return redirect()->route('industries.index')->with('success', 'Industry deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting industry: ' . $e->getMessage());
        }
    }
    public function industry($slug)
    {
        $industry = Industry::where('slug', $slug)->first();
        return view('frontend.pages.single-industry', compact('industry'));
    }
} 
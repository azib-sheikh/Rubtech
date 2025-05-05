<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->latest()->paginate(10);
        return view('backend.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/blogs', 'public');    
            $data['img'] = $imagePath;
        }

        Blog::create($data);


        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function show(Blog $blog)
    {
        $this->authorize('view', $blog);
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('uploads/blogs', 'public');
            $data['img'] = $imagePath;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
    public function posts()
    {
        $blogs = Blog::with('user')->latest()->paginate(10);
        return view('frontend.pages.blog', compact('blogs'));
    }
    public function post($title)
    {
        $blog = Blog::where('title', $title)->first();
        return view('frontend.pages.single', compact('blog'));
    }
}

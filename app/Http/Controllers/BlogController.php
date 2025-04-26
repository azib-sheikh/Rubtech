<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        /*  $blogs = Blog::where('user_id', auth()->id())->latest()->get(); */
        $blogs = Blog::latest()->get();
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
        ]);

        Blog::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created!');
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
        // Validate input fields
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',

        ]);

        // Prepare update data
        $data = $request->only('title', 'content');

        // Handle image upload if new image is uploaded
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('uploads/blogs', 'public');
            $data['image'] = $imagePath;
        }

        // Update the blog
        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated!');
    }


    public function destroy(Blog $blog)
    {

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted!');
    }
}

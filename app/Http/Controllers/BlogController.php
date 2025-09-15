<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use pagination (e.g., 10 items per page)
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = null; // Initialize $fileName to store the original name

        if ($request->hasFile('image')) {
            // Store the file in the public/assets/blogs directory and get the file name
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/blogs'), $fileName);
        }

        // Only store the file name in the database if it was uploaded
        $requestData = $request->all();
        $requestData['image'] = $fileName; // Assign the file name to the request data

        Blog::create($requestData);
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = null; // Initialize $fileName to store the original name

        if ($request->hasFile('image')) {
            // Delete the old image if it exists in the public/assets/blogs directory
            if ($blog->image && file_exists(public_path('assets/blogs/' . $blog->image))) {
                unlink(public_path('assets/blogs/' . $blog->image));
            }

            // Store the new file in the public/assets/blogs directory and get the file name
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/blogs'), $fileName);
        }

        // Update the blog with the new data
        $requestData = $request->all();
        if ($fileName) {
            $requestData['image'] = $fileName; // Assign the new file name if it was uploaded
        }

        $blog->update($requestData);
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}

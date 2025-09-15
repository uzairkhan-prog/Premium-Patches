<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Portfolio;

class BlogPageController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $blogs = Blog::all(); // 6 items per page
        $portfolios = Portfolio::all();
        return view('blog', compact('services', 'blogs', 'portfolios'));
    }

    // Display a single blog post by ID
    public function show($id)
    {
        $services = Service::all();
        $blog = Blog::findOrFail($id);
        $blogs = Blog::latest()->take(3)->get();
        $portfolios = Portfolio::all();
        return view('blogs.blog-single', compact('services', 'blog', 'blogs', 'portfolios'));
    }
}

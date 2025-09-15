<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method to show the main page with services
    public function index()
    {
        $services = Service::take(6)->get();
        $blogs = Blog::take(3)->get(); // 3 items per page
        $portfolios = Portfolio::all();
        return view('index', compact('services', 'blogs', 'portfolios')); // Adjust this to your actual view name
    }
}

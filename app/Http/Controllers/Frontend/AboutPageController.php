<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Blog;

class AboutPageController extends Controller
{
    // Method to show the main page with services
    public function index()
    {
        $services = Service::take(6)->get(); // Fetch all services
        $portfolios = Portfolio::all();
        $blogs = Blog::paginate(3); // 3 items per page
        return view('about', compact('services', 'portfolios', 'blogs')); // Adjust this to your actual view name
    }
}

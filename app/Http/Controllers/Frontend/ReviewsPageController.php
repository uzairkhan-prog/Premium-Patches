<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Blog;

class ReviewsPageController extends Controller
{
    public function index()
    {
        $services = Service::paginate(6); // Adjust the number of items per page
        $portfolios = Portfolio::all();
        $blogs = Blog::paginate(3);
        return view('reviews', compact('services', 'portfolios', 'blogs'));
    }
}
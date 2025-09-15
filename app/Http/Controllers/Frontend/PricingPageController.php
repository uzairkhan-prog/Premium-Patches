<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Blog;
use Illuminate\Http\Request;

class PricingPageController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::paginate(100);
        $services = Service::all();
        $blogs = Blog::paginate(3); // 3 items per page
        return view('pricing', compact('services', 'blogs', 'portfolios'));
    }
}

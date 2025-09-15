<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;
use App\Models\Portfolio;

class PrivacyPolicyController extends Controller
{
    // Method to show the main page with services
    public function index()
    {
        $services = Service::whereNull('parent_id')->get();
        $portfolios = Portfolio::all();
        return view('privacy-policy', compact('services', 'portfolios'));
    }
}

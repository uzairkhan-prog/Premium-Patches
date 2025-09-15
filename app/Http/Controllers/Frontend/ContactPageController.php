<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClientInquiryMail;
use Illuminate\Support\Facades\Http;

class ContactPageController extends Controller
{
    // Method to show the main page with services
    public function index()
    {
        $services = Service::all(); // Fetch all services
        $portfolios = Portfolio::all();
        $blogs = Blog::paginate(3); // 3 items per page
        return view('contact', compact('services', 'portfolios', 'blogs')); // Adjust this to your actual view name
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required'
        ]);

        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secretKey = env('RECAPTCHA_SECRET');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        $responseBody = $response->json();

        if (!$responseBody['success']) {
            return response()->json(['success' => false, 'message' => 'reCAPTCHA verification failed. Please try again.']);
        }

        Client::create($request->only(['name', 'email', 'phone', 'service', 'message']));

        return response()->json(['success' => true, 'message' => 'Your message was submitted successfully!']);
    }
}

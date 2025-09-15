<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Display a listing of the services
    public function index()
    {
        // Use pagination (e.g., 10 items per page)
        $services = Service::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.services.index', compact('services'));
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('admin.services.create');
    }

    // Store a newly created service in the database
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'feature_icon' => 'nullable|string|max:255',  // Icon can be optional
            'service_type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string|max:500',       // Summary can be optional
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = null; // Initialize $fileName to store the original name

        if ($request->hasFile('image')) {
            // Store the file in the public/assets/blogs directory and get the file name
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/services'), $fileName);
        }

        // Only store the file name in the database if it was uploaded
        $requestData = $request->all();
        $requestData['image'] = $fileName; // Assign the file name to the request data

        Service::create($requestData);
        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    // Show the form for editing the specified service
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    // Update the specified service in the database
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'feature_icon' => 'nullable|string|max:255',  // Icon can be optional
            'service_type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string|max:500',       // Summary can be optional
            'description' => 'required|string',
        ]);

        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    // Remove the specified service from the database
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}

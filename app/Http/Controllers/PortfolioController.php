<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use pagination (e.g., 10 items per page)
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = null; // Initialize $fileName to store the original name

        if ($request->hasFile('image')) {
            // Store the file in the public/assets/portfolios directory and get the file name
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/portfolios'), $fileName);
        }

        // Only store the file name in the database if it was uploaded
        $requestData = $request->all();
        $requestData['image'] = $fileName; // Assign the file name to the request data

        Portfolio::create($requestData);
        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
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
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = null; // Initialize $fileName to store the original name

        if ($request->hasFile('image')) {
            // Delete the old image if it exists in the public/assets/portfolios directory
            if ($portfolio->image && file_exists(public_path('assets/portfolios/' . $portfolio->image))) {
                unlink(public_path('assets/portfolios/' . $portfolio->image));
            }

            // Store the new file in the public/assets/portfolios directory and get the file name
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/portfolios'), $fileName);
        }

        // Update the portfolio with the new data
        $requestData = $request->all();
        if ($fileName) {
            $requestData['image'] = $fileName; // Assign the new file name if it was uploaded
        }

        $portfolio->update($requestData);
        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}

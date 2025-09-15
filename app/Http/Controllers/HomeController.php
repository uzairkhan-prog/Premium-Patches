<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Portfolio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Use pagination (e.g., 10 items per page)
        $clients = Client::orderBy('created_at', 'desc')->paginate(10);

        // Count totals
        $servicesTotal = Service::count();
        $blogsTotal = Blog::count();
        $clientsTotal = Client::count();
        $portfoliosTotal = Portfolio::count();

        // Get the current year or the selected year from the request
        $selectedYear = $request->input('year', date('Y')); // Default to the current year if no year is selected

        // Get total number of clients per month for the selected year
        $clientsCountPerMonth = Client::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', $selectedYear) // Filter by selected year
            ->groupBy('year', 'month')
            ->orderBy('month', 'asc') // Ensure months are sorted in ascending order
            ->get();

        // Prepare an array of month names
        $monthNames = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        // Map the month numbers to month names (without year)
        $months = $clientsCountPerMonth->map(function ($item) use ($monthNames) {
            return $monthNames[$item->month - 1]; // Just the month name, no year
        })->toArray();

        // Prepare the client count for each month
        $clientsCount = $clientsCountPerMonth->pluck('count')->toArray();

        // Fill in the missing months (if any) with 0 counts
        $allMonths = collect($monthNames); // A collection of all months
        $monthsCollection = collect($months);
        $missingMonths = $allMonths->diff($monthsCollection)->values(); // Find the months that are missing

        foreach ($missingMonths as $missingMonth) {
            // Add missing months with 0 clients count
            $months[] = $missingMonth;
            $clientsCount[] = 0;
        }

        // Sort the months and client count arrays in chronological order (from January to December)
        $months = array_values($months); // Remove any keys to make sure the array is sequential
        $clientsCount = array_values($clientsCount);

        // Get available years for selection (based on clients data)
        $years = Client::selectRaw('YEAR(created_at) as year')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('admin.dashboard', compact('clients', 'months', 'clientsCount', 'selectedYear', 'years', 'servicesTotal', 'blogsTotal', 'clientsTotal', 'portfoliosTotal'));
    }
}

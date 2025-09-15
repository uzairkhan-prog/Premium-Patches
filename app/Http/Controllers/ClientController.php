<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Exports\ClientsExport;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use pagination (e.g., 10 items per page)
        $clients = Client::orderBy('created_at', 'desc')->paginate(8);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Client $client)
    {
        $services = Service::all();
        return view('admin.clients.edit', compact('client', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id, // Exclude current client from unique check
            'subject' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Update the client record with the validated data
        $client->update($request->only(['name', 'email', 'subject', 'phone', 'service', 'message']));

        // Redirect back to the clients index with a success message
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        if ($client->document_path) {

            // Get the document path before deleting the client
            $documentPath = public_path('assets/client-document/' . $client->document_path);

            // dd($documentPath);

            // Check if the document exists and delete it
            if (file_exists($documentPath)) {
                unlink($documentPath); // Delete the file
            }
        }

        // Delete the client entry from the database
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids');

        // Validate the IDs
        if (is_array($ids) && !empty($ids)) {
            Client::whereIn('id', $ids)->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 400);
    }

    public function downloadDocument(Client $client)
    {
        // Get the document path from the client's record
        $documentPath = $client->document_path;

        // Ensure the file exists
        if (file_exists(public_path('assets/client-document/' . $documentPath))) {
            // Return the file as a download response
            return response()->download(public_path('assets/client-document/' . $documentPath));
        }

        // Redirect back with an error message if the file does not exist
        return redirect()->route('clients.index')->with('error', 'Document not found.');
    }

    public function exportExcel(Client $client)
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new ClientsExport(collect([$client])), 'client_' . $client->id . '.xlsx');
    }

    public function exportSelected(Request $request)
    {
        $ids = explode(',', $request->query('ids'));

        if (empty($ids)) {
            return redirect()->back()->with('error', 'No clients selected for export.');
        }

        $clients = Client::whereIn('id', $ids)->get();

        if ($clients->isEmpty()) {
            return redirect()->back()->with('error', 'No valid clients found for export.');
        }

        return \Maatwebsite\Excel\Facades\Excel::download(new ClientsExport($clients), 'selected_clients.xlsx');
    }

    public function exportAll(Request $request)
    {
        $clients = Client::all();

        if ($clients->isEmpty()) {
            return redirect()->back()->with('error', 'No valid clients found for export.');
        }

        return \Maatwebsite\Excel\Facades\Excel::download(new ClientsExport($clients), 'all_clients.xlsx');
    }
}

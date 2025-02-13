<?php

namespace App\Http\Controllers;

use App\Models\BookCatalogs;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{
    public function index()
    {
        $chk = BookCatalogs::all();
        return Inertia::render('Dashboard', [
            'bookCatalogs' => $chk,
        ]);
    }

    public function create()
    {
        return Inertia::render('BookCatalog/Create');
    }

    // Store a newly created book in the database
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'cover_image' => 'required|url|max:255',
        ]);

        // Create the book
        BookCatalogs::create($validatedData);

        // Redirect to the dashboard or another page
        return redirect()->route('dashboard')->with('success', 'Book added successfully!');
    }
}

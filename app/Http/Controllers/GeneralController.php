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

    public function store(Request $request)
    {
        //dd("inside");
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'language' => 'required|string|max:255',
        ]);

        $insert = BookCatalogs::create($validatedData);
        //dd($insert);

        return redirect()->route('dashboard')->with('success', 'Book added successfully!');
    }
}

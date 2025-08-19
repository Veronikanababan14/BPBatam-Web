<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Perizinan;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        // Cari di dua tabel
        $layanans = Layanan::where('nama', 'like', "%$query%")
                        ->orWhere('deskripsi', 'like', "%$query%")
                        ->get(['id', 'nama as title', 'deskripsi', \DB::raw("'layanan' as type")]);

        $perizinans = Perizinan::where('nama', 'like', "%$query%")
                        ->orWhere('deskripsi', 'like', "%$query%")
                        ->get(['id', 'nama as title', 'deskripsi', \DB::raw("'perizinan' as type")]);

        // Gabung hasil
        $results = $layanans->merge($perizinans);

        return view('search.results', compact('results', 'query'));
    }
}

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

        // Cari Layanan
        $layanans = Layanan::where('nama', 'LIKE', "%{$query}%")
                           ->orWhere('deskripsi', 'LIKE', "%{$query}%")
                           ->get(['id', 'nama as title', 'deskripsi', \DB::raw("'layanan' as type")]);

        // Cari Perizinan
        $perizinans = Perizinan::where('nama', 'LIKE', "%{$query}%")
                               ->orWhere('deskripsi', 'LIKE', "%{$query}%")
                               ->get(['id', 'nama as title', 'deskripsi', \DB::raw("'perizinan' as type")]);

        // Gabungkan hasil
        $results = $layanans->merge($perizinans);

        return view('search.results', compact('results', 'query'));
    }
}

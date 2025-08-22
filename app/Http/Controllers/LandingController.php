<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Perizinan;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // Kalau ada search → ambil dengan pagination
            $layanans = Layanan::where('nama', 'like', '%' . $search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $search . '%')
                        ->paginate(6, ['*'], 'layanan_page');

            $perizinans = Perizinan::where('nama', 'like', '%' . $search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $search . '%')
                        ->paginate(3, ['*'], 'perizinan_page');
        } else {
            // Default tetap pagination
            $layanans = Layanan::paginate(6, ['*'], 'layanan_page');
            $perizinans = Perizinan::paginate(3, ['*'], 'perizinan_page');
        }

        return view('home', compact('layanans', 'perizinans', 'search'));
    }
}

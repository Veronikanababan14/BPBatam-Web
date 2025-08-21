<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function usaha() {
        return view('layanan.usaha');
    }

    public function lokasi() {
        return view('layanan.lokasi');
    }

    public function pbg() {
        return view('layanan.pbg');
    }

    public function lingkungan() {
        return view('layanan.lingkungan');
    }

    public function tka() {
        return view('layanan.tka');
    }

    public function kawasan() {
    return view('layanan.kawasan');
}

}

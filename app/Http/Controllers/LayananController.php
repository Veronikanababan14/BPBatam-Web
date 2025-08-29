<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Perizinan;

class LayananController extends Controller
{
    public function index()
    {
        // Ambil hanya 2 layanan pertama
         $list = Layanan::take(2)->get();

        // Kirim ke view
        return view('pages.perizinan1', [
            'layanan'  => $list,
            'layanans' => $list,
        ]);

        return view('pages.perizinan2', [
            'layanan'  => $list,
            'layanans' => $list,
        ]);
        
    }

  public function show($id)
{
    $layanan = Layanan::findOrFail($id);

    // Hapus hardcode subLayanan
    // return view('pages.layanan-detail', compact('layanan', 'subLayanan'));
    return view('pages.layanan-detail', compact('layanan'));
}



}

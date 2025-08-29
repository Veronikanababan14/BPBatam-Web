<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class PerizinanController extends Controller
{
    // Halaman Perizinan 1
    public function perizinan1()
    {
        $perizinan = Perizinan::findOrFail(1); // ID Perizinan 1
        return view('pages.perizinan1', compact('perizinan'));
    }

    // Halaman Perizinan 2
    public function perizinan2()
    {
        $perizinan = Perizinan::findOrFail(2); // ID Perizinan 2
        return view('pages.perizinan2', compact('perizinan'));
    }

    // Halaman Perizinan 3
    public function perizinan3()
    {
        $perizinan = Perizinan::findOrFail(3); // ID Perizinan 3
        return view('pages.perizinan3', compact('perizinan'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // data bisa ambil dari database (misalnya jumlah user, jumlah layanan)
        return view('admin.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home'); // landing page
    }

    public function beranda() {
        return view('pages.beranda'); // halaman beranda dengan profil, sejarah, struktur, visi-misi
    }

    public function profil() {
        return view('pages.profil');
    }

    public function sejarah() {
        return view('pages.sejarah');
    }

    public function visiMisi() {
        return view('pages.visi-misi');
    }

    public function struktur() {
        return view('pages.struktur');
    }

    public function kontak() {
        return view('pages.kontak');
    }
}


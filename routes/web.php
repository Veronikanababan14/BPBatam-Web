<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Beranda
Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');

// Submenu
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/sejarah', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('visi-misi');
Route::get('/struktur', [PageController::class, 'struktur'])->name('struktur');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Search
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Login / Register
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Layanan
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/izin/usaha', [LayananController::class, 'usaha'])->name('izin.usaha');
Route::get('/izin/lokasi', [LayananController::class, 'lokasi'])->name('izin.lokasi');
Route::get('/izin/pbg', [LayananController::class, 'pbg'])->name('izin.pbg');
Route::get('/izin/lingkungan', [LayananController::class, 'lingkungan'])->name('izin.lingkungan');
Route::get('/izin/tka', [LayananController::class, 'tka'])->name('izin.tka');
Route::get('/izin/kawasan', [LayananController::class, 'kawasan'])->name('izin.kawasan');

// FAQ
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
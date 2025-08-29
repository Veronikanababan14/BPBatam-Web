<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Home / Landing
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/beranda', [LandingController::class, 'index'])->name('beranda');


// Submenu
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Search
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Login / Register
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Layanan
Route::get('/layanan/search', [LayananController::class, 'search'])->name('layanan.search');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index'); // daftar layanan

 Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.show'); // detail layanan
 Route::get('/layanan/search', [SearchController::class, 'index'])->name('layanan.search');

// Perizinan
Route::get('/perizinan', [PerizinanController::class, 'index'])->name('perizinan1');

// Gabungkan semua izin ke satu route dengan parameter {jenis}
Route::get('/izin/{jenis}', [LayananController::class, 'izin'])->name('izin');

// FAQ
Route::get('/faq', [PageController::class, 'faq'])->name('faq');


// Route untuk halaman Perizinan 1
Route::get('/perizinan1', function () {
    return view('pages.perizinan1');
})->name('perizinan1');

// Route untuk halaman Perizinan 2
Route::get('/perizinan2', function () {
    return view('pages.perizinan2');
})->name('perizinan2');

// Route untuk halaman Perizinan 3
Route::get('/perizinan3', function () {
    return view('pages.perizinan3');
})->name('perizinan3');

// Route Admin
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])
        ->name('admin.dashboard');
});

// Admin Login
Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});






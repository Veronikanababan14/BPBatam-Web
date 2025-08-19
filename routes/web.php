<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('home');
});
//search
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Register
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard contoh
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

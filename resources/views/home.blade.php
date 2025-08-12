@extends('layouts.app')

@section('content')
<style>
.hero-section {
    background: url('{{ asset('images/background.jpg') }}') no-repeat center center;
    background-size: cover;
    padding: 100px 0; /* jarak atas bawah */
}
.hero-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 60px; /* jarak antar kolom lebih lebar */
    max-width: 1200px;
    margin: auto;
    padding: 0 40px; /* jarak kiri-kanan */
}
.hero-text {
    flex: 1 1 50%;
    max-width: 50%;
}
.hero-text h1 {
    font-size: 2.8rem;
    font-weight: bold;
    color: #0056d2;
    margin-bottom: 20px;
}
.hero-text p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #333;
}
.hero-buttons {
    margin-bottom: 25px;
}
.hero-buttons .btn-primary {
    background-color: #0056d2;
    border: none;
    padding: 14px 28px;
    font-size: 1rem;
    border-radius: 6px;
}
.hero-search input {
    padding: 12px;
    font-size: 1rem;
    width: 100%;
    max-width: 400px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.hero-image {
    flex: 1 1 40%;
    max-width: 40%;
    text-align: center;
}
.hero-image img {
    max-width: 100%;
    height: auto;
    display: block;
}
@media (max-width: 768px) {
    .hero-text, .hero-image {
        max-width: 100%;
        text-align: center;
    }
    .hero-container {
        flex-direction: column-reverse;
        padding: 0 20px;
    }
}
</style>

<section class="hero-section">
    <div class="hero-container">
        <div class="hero-text">
            <h1 class="text-3xl font-bold text-blue-700">
                Selamat Datang di Portal Layanan Perizinan
            </h1>
            <p class="text-gray-600 mt-2">
                Sistem perizinan yang cepat, transparan, dan terintegrasi untuk anda
            </p>
            <div class="hero-buttons mt-4">
                <a href="#" class="btn btn-primary">Jelajahi Layanan</a>
            </div>
            <!-- Search with icon -->
            <div class="relative max-w-sm mt-3">
                <input type="text" 
                       class="w-full p-2 pr-10 border border-gray-400 rounded text-neutral-600" 
                       placeholder="Cari Layanan di sini...">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-5 w-5 text-blue-500 absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" 
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-ilustration.png') }}" alt="Ilustrasi Perizinan">
        </div>
    </div>
</section>

<!-- Layanan -->
<section class="container my-5">
    <h2 class="mb-4 font-bold text-2xl">Layanan Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Layanan 1</h5>
                <p>Deskripsi layanan.</p>
            </div>
            <a href="#" class="block mt-3 bg-orange-500 text-white text-center py-2 rounded font-semibold hover:bg-orange-600">
                Lihat Detail
            </a>
        </div>

        <!-- Kartu Tengah (lebih besar) -->
        <div class="bg-white rounded-lg shadow-lg p-6 w-80">
            <h4 class="text-xl font-bold text-blue-700">Layanan 2</h4>
            <p class="text-sm text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
            </p>
            <img src="{{ asset('images/layanan_2.png') }}" alt="layanan 2" class="w-full h-52 object-cover rounded mt-3">
            <div class="flex items-center mt-3 text-sm text-gray-500">
                ❌ <span class="ml-2">Tonton Video Penjelasan</span>
            </div>
            <a href="#" class="block mt-3 bg-orange-500 text-white text-center py-2 rounded font-semibold hover:bg-orange-600">
                Lihat Detail
            </a>
        </div>

        <!-- Kartu Kanan -->
        <div class="bg-white rounded-lg shadow-lg p-4 w-64">
            <h4 class="text-lg font-semibold text-blue-700">Layanan 3</h4>
            <p class="text-sm text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit...
            </p>
            <img src="{{ asset('images/layanan_3.png') }}" alt="layanan 3" class="w-full h-40 object-cover rounded mt-3">
            <div class="flex items-center mt-3 text-sm text-gray-500">
                ❌ <span class="ml-2">Tonton Video Penjelasan</span>
            </div>
            <a href="#" class="block mt-3 bg-orange-500 text-white text-center py-2 rounded font-semibold hover:bg-orange-600">
                Lihat Detail
            </a>
        </div>

        <!-- Panah Kanan -->
        <button class="text-3xl text-gray-500 hover:text-gray-700">&#8250;</button>

    </div>

</section>

@endsection












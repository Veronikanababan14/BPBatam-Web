@extends('layouts.app')

@section('content')
   <!-- Hero Section -->
<section class="mt-1 flex items-center ml-8 relative">
    <!-- Bagian Teks -->
    <div class="mr-6">
        <h1 class="text-3xl font-bold text-blue-700 text-left">
            Selamat Datang di Portal Layanan Perizinan
        </h1>
        <p class="text-gray-600 mt-2 text-left">
            Sistem perizinan yang cepat, transparan, dan terintegrasi untuk anda
        </p>
    </div>

    <!-- Bagian Gambar -->
    <div>
        <img src="{{ asset('images/hero-ilustration.png') }}" 
             alt="Ilustrasi Layanan" 
             class="w-[400px] h-auto"> 
    </div>
</section>
        <!-- Search -->
        <div class="container mt-2">
    <h2 class="text-l font-semibold mb-1 text-white bg-blue-700 rounded-sm px-2 py-1 w-max ml-10">
        Jelajahi Layanan
    </h2>
    <div class="flex justify-center">
    <div class="relative max-w-sm w-full">
        <input type="text" 
               class="form-control w-full p-2 pr-10 border border-gray-400 rounded text-neutral-400" 
               placeholder="Cari Layanan di sini...">
        
        <!-- Ikon kaca pembesar -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5 text-blue-500 absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
        </svg>
    </div>
</div>


        </div>
</section>

<!-- Judul Daftar Layanan -->
        <div class="mt-12 bg-red-100 py-4">
    <h3 class="text-2xl font-bold text-center text-orange-500">
        Layanan Berdasarkan Kategori
    </h3>
</div>

<!-- Kategori -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 px-10">

        <!-- Kartu Kiri -->
        <div class="bg-white rounded-lg shadow-lg p-4 w-64">
            <h4 class="text-lg font-semibold text-blue-700">Layanan 1</h4>
            <p class="text-sm text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit...
            </p>
            <img src="{{ asset('images/layanan_1.png') }}" alt="layanan 1" class="w-full h-40 object-cover rounded mt-3">
            <div class="flex items-center mt-3 text-sm text-gray-500">
                ❌ <span class="ml-2">Tonton Video Penjelasan</span>
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


        <!-- Judul Daftar Layanan -->
        <div class="mt-12 bg-red-100 py-4">
    <h3 class="text-2xl font-bold text-center text-orange-500">
        Layanan Berdasarkan Kategori
    </h3>
</div>

<!-- Kategori -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 px-10">
    
    <!-- Kartu Layanan -->
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h4 class="text-lg font-semibold text-blue-700">Layanan 4</h4>
        <p class="text-sm text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </p>
        <img src="{{ asset('images/layanan_4.png') }}" alt="" 
             class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" 
           class="block mt-3 bg-orange-500 text-white text-center py-2 px-6 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>

    <!-- Kartu Layanan 5 -->
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h4 class="text-lg font-semibold text-blue-700">Layanan 5</h4>
        <p class="text-sm text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </p>
        <img src="{{ asset('images/layanan_5.png') }}" alt="" 
             class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" 
           class="block mt-3 bg-orange-500 text-white text-center py-2 px-6 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>

    <!-- Kartu Layanan 6 -->
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h4 class="text-lg font-semibold text-blue-700">Layanan 6</h4>
        <p class="text-sm text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </p>
        <img src="{{ asset('images/layanan_6.png') }}" alt="" 
             class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" 
           class="block mt-3 bg-orange-500 text-white text-center py-2 px-6 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>

</div>

        </div>

    </section>
@endsection












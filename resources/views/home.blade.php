@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-center mt-20">
        <!-- Judul Hero -->
        <h1 class="text-3xl font-bold text-blue-700">Selamat Datang di Portal Layanan Perizinan</h1>
        <p class="text-gray-600 mt-2">Sistem perizinan yang cepat, transparan, dan terintegrasi untuk anda</p>

        <!-- Search -->
        <div class="container mt-10">
    <h2 class="text-l font-semibold mb-1 text-white bg-blue-700 rounded-sm px-2 py-1 w-max">
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


        <!-- Judul Daftar Layanan -->
        <div class="mt-12 bg-red-100 py-4">
            <h3 class="text-2xl font-bold text-center text-orange-500">Layanan Perizinan Unggulan</h3>
        </div>

        <!-- Daftar Layanan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 px-10">

            <!-- Kartu Layanan 1 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h4 class="text-lg font-semibold mt-4 text-blue-700">Layanan 1</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <img src="{{ asset('images/layanan_1.png') }}" alt="layanan_1" class="w-full h-40 object-cover rounded mt-3">
                <div class="mt-3">
                    <a href="#" class="block py-2 px-3 text-white rounded-sm bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:px-2 md:py-1 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">
            </li>Lihat Detail</a>
                </div>
            </div>

            <!-- Kartu Layanan 2 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h4 class="text-lg font-semibold mt-4 text-blue-700">Layanan 2</h4>
                <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <img src="{{ asset('images/layanan_2.png') }}" alt="" class="w-full h-40 object-cover rounded mt-3">
                <div class="mt-3">
                    <a href="#" class="block py-2 px-3 text-white rounded-sm bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:px-2 md:py-1 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">
            </li>Lihat Detail</a>
                </div>
            </div>

            <!-- Kartu Layanan 3 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h4 class="text-lg font-semibold mt-4 text-blue-700">Layanan 3</h4>
                <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <img src="{{ asset('images/layanan_3.png') }}" alt="" class="w-full h-40 object-cover rounded mt-3">
                <div class="mt-3">
                    <a href="#" class="block py-2 px-3 text-white rounded-sm bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:px-2 md:py-1 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">
            </li>Lihat Detail</a>
                </div>
            </div>

        </div>

        <!-- Judul Daftar Layanan -->
        <div class="mt-12 bg-red-100 py-4">
            <h3 class="text-2xl font-bold text-center text-orange-500">Layanan Berdasarkan Kategori</h3>
        </div>

        <!-- Kategori -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 px-10">
            <!-- Kartu Layanan 4 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h4 class="text-lg font-semibold mt-4 text-blue-700 ">Layanan 4</h4>
                <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <img src="{{ asset('images/layanan_4.png') }}" alt="" class="w-full h-40 object-cover rounded mt-3">
                <div class="mt-3">
                    <a href="#" class="block py-2 px-3 text-white rounded-sm bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:px-2 md:py-1 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">
            </li>Lihat Detail</a>
                </div>
            </div>

            <!-- Kartu Layanan 5 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h4 class="text-lg font-semibold mt-4 text-blue-700">Layanan 5</h4>
                <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <img src="{{ asset('images/layanan_5.png') }}" alt="" class="w-full h-40 object-cover rounded mt-3">
                <div class="mt-3">
                    <a href="#" class="block py-2 px-3 text-white rounded-sm bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:px-2 md:py-1 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">
            </li>Lihat Detail</a>
                </div>
            </div>

            <!-- Kartu Layanan 6 -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <h4 class="text-lg font-semibold mt-4 text-blue-700">Layanan 6</h4>
                <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <img src="{{ asset('images/layanan_6.png') }}" alt="" class="w-full h-40 object-cover rounded mt-3">
                <div class="mt-3">
                    <a href="#" class="block py-2 px-3 text-white rounded-sm bg-blue-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:px-2 md:py-1 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent font-bold">
            </li>Lihat Detail</a>
                </div>
            </div>
        </div>

    </section>
@endsection

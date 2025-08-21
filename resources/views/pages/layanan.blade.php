@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">
        Ikon Layanan
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Izin Usaha -->
        <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold">Izin Usaha</h3>
            <p class="text-gray-500 text-sm mt-2">Pengajuan izin usaha untuk perusahaan atau usaha baru.</p>
            <a href="{{ route('izin.usaha') }}" 
               class="mt-4 inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-blue-700 transition">
               Ajukan Sekarang
            </a>
        </div>

        <!-- Izin Lokasi -->
        <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-green-100 text-green-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1.9-2 2-2h6a2 2 0 012 2v8a2 2 0 01-2 2h-6a2 2 0 01-2-2v-8zM6 11H4a2 2 0 00-2 2v6a2 2 0 002 2h2m4-10h4v10H10V11z" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold">Izin Lokasi</h3>
            <p class="text-gray-500 text-sm mt-2">Izin penggunaan lahan di kawasan BP Batam.</p>
            <a href="{{ route('izin.lokasi') }}" 
               class="mt-4 inline-block bg-green-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-green-700 transition">
               Ajukan Sekarang
            </a>
        </div>

        <!-- Persetujuan Bangunan Gedung (PBG) -->
        <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-yellow-100 text-yellow-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21v-8m0 0L12 3l8 10v8M4 13h16" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold">Persetujuan Bangunan Gedung (PBG)</h3>
            <p class="text-gray-500 text-sm mt-2">Perizinan pembangunan dan renovasi bangunan.</p>
            <a href="{{ route('izin.pbg') }}" 
               class="mt-4 inline-block bg-yellow-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-yellow-700 transition">
               Ajukan Sekarang
            </a>
        </div>

        <!-- Izin Lingkungan -->
        <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-teal-100 text-teal-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22c4.418 0 8-3.582 8-8S16.418 6 12 6 4 9.582 4 14s3.582 8 8 8z" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold">Izin Lingkungan</h3>
            <p class="text-gray-500 text-sm mt-2">Perizinan terkait pengelolaan dampak lingkungan.</p>
            <a href="{{ route('izin.lingkungan') }}" 
               class="mt-4 inline-block bg-teal-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-teal-700 transition">
               Ajukan Sekarang
            </a>
        </div>

        <!-- Izin Kawasan Industri -->
        <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-purple-100 text-purple-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20V10a1 1 0 011-1h4a1 1 0 011 1v10m-6 0h6m-6 0H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2h-4" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold">Izin Kawasan Industri</h3>
            <p class="text-gray-500 text-sm mt-2">Perizinan untuk pengelolaan dan operasional kawasan industri.</p>
            <a href="{{ route('izin.kawasan') }}" 
               class="mt-4 inline-block bg-purple-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-purple-700 transition">
               Ajukan Sekarang
            </a>
        </div>

        <!-- Izin Tenaga Kerja Asing (TKA) -->
        <div class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <div class="bg-red-100 text-red-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 14a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0v1a4 4 0 01-8 0v-1m0 0V7a4 4 0 018 0v7z" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold">Izin Tenaga Kerja Asing (TKA)</h3>
            <p class="text-gray-500 text-sm mt-2">Perizinan penggunaan tenaga kerja asing di Batam.</p>
            <a href="{{ route('izin.tka') }}" 
               class="mt-4 inline-block bg-red-600 text-white text-sm px-4 py-2 rounded-lg hover:bg-red-700 transition">
               Ajukan Sekarang
            </a>
        </div>
    </div>
</div>
@endsection

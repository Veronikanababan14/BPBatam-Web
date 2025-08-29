@extends('layouts.app')

@section('content')

<section class="pt-20 pb-12 bg-slate-100">
  <div class="max-w-5xl mx-auto px-6">
    <!-- Judul -->
    <h1 class="text-3xl font-bold text-blue-700 mb-4">Perizinan 3</h1>
    <p class="text-gray-600 mb-6">
      Deskripsi singkat untuk Perizinan
    </p>

    <!-- Gambar -->
    <div class="text-center mb-6">
      <img src="{{ asset('images/perizinan3.png') }}" 
           alt="Perizinan 3" 
           class="mx-auto w-full max-w-md rounded shadow">
    </div>

    <!-- Video / Penjelasan -->
    <div class="mb-6">
      <h2 class="text-xl font-semibold text-orange-500 mb-2">Video Penjelasan</h2>
      <div class="aspect-w-16 aspect-h-9">
        <iframe class="w-full h-64 md:h-96" 
                src="https://www.youtube.com/embed/VIDEO_ID" 
                title="Video Perizinan 3" 
                frameborder="0" 
                allowfullscreen>
        </iframe>
      </div>
    </div>

    <!-- Dokumen / Detail Proses -->
    <div class="mb-6">
      <h2 class="text-xl font-semibold text-orange-500 mb-2">Detail Proses Perizinan</h2>
      <p class="text-gray-700">
        Tahap 1: Pengajuan permohonan <br>
        Tahap 2: Verifikasi dokumen <br>
        Tahap 3: Persetujuan dan penerbitan izin
      </p>
    </div>

    <!-- Tombol Kembali -->
    <a href="{{ route('beranda') }}" 
       class="inline-block mt-4 bg-blue-700 text-white py-2 px-4 rounded hover:bg-blue-800 font-semibold">
      Kembali ke Beranda
    </a>
  </div>
</section>

@endsection

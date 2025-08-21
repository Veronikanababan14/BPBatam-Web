@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 pt-24 px-4">
    <!-- Profil -->
    <h1 class="text-xl font-bold text-blue-700 mb-6">Profil</h1>
    <p class="text-gray-700 mb-8">
        Badan Pengusahaan Batam (BP Batam) adalah lembaga pemerintah yang bertugas mengelola, menata, dan mengembangkan kawasan Batam, Bintan, dan sekitarnya. BP Batam memiliki peran penting dalam menarik investasi, membangun infrastruktur, serta mendorong pertumbuhan ekonomi dan industri di wilayah Kepulauan Riau.
    </p>

    <!-- Sejarah -->
    <h2 class="text-xl font-bold text-blue-700 mt-8 mb-4">Sejarah</h2>
    <p class="text-gray-700 mb-8">
        BP Batam didirikan untuk mempercepat pengembangan kawasan industri dan perdagangan Batam sejak tahun 1970-an. Tujuan awalnya adalah mendorong pertumbuhan ekonomi melalui pembangunan kawasan bebas dan fasilitas investasi. Seiring waktu, BP Batam juga mengembangkan infrastruktur, layanan publik, dan kerja sama dengan investor lokal maupun internasional.
    </p>

    <!-- Struktur Organisasi -->
    <h2 class="text-xl font-bold text-blue-700 mt-8 mb-4">Struktur Organisasi</h2>
    <p class="text-gray-700 mb-8">
        Struktur BP Batam terdiri dari Dewan Pengawas yang mengawasi kebijakan strategis, Kepala Badan sebagai pimpinan eksekutif, dan beberapa unit kerja yang menangani bidang investasi, perizinan, pembangunan kawasan, infrastruktur, serta administrasi dan keuangan.
    </p>
    <div class="flex justify-center mb-8">
    <img src="{{ asset('images/struktur.png') }}" alt="Struktur Organisasi BP Batam" class="w-full max-w-3xl rounded shadow">
</div>

    <!-- Visi & Misi -->
    <h2 class="text-xl font-bold text-blue-700 mt-8 mb-4">Visi & Misi</h2>

    <h3 class="text-xl font-semibold text-blue-600 mb-3">Visi</h3>
    <p class="text-gray-700 mb-4">
        Menjadi penggerak utama pertumbuhan ekonomi nasional melalui pengembangan kawasan industri dan investasi strategis.
    </p>

    <h3 class="text-xl font-semibold text-blue-600 mb-3">Misi</h3>
    <ul class="list-disc list-inside space-y-2 text-gray-700 mb-8">
        <li>Meningkatkan pelayanan investasi dan perizinan bagi investor lokal maupun asing.</li>
        <li>Mengembangkan infrastruktur modern yang mendukung pertumbuhan ekonomi.</li>
        <li>Menjaga tata kelola pemerintahan yang baik dan transparan.</li>
        <li>Mendorong pertumbuhan industri kreatif dan teknologi.</li>
        <li>Membangun kemitraan yang harmonis dengan berbagai pihak terkait.</li>
    </ul>
</div>
@endsection

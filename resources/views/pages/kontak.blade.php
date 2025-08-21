@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12 pt-24 px-4">
    <div class="max-w-screen-xl mx-auto px-6">
        <!-- Heading -->
        <h2 class="text-3xl font-bold text-blue-700 mb-10 text-left border-b-4 border-orange-500 inline-block pb-2">
            Kontak BP Batam
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Info Kontak -->
            <div class="bg-blue-50 p-8 rounded-2xl shadow">
                <h3 class="text-xl font-semibold text-blue-700 mb-6">Hubungi Kami</h3>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start gap-3">
                        <i class="lucide lucide-map-pin text-blue-600 text-2xl"></i>
                        <span>Jl. Engku Putri No. 1, Batam Center, Kota Batam, Kepulauan Riau</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="lucide lucide-phone text-blue-600 text-2xl"></i>
                        <span>(0778) 123456</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="lucide lucide-mail text-blue-600 text-2xl"></i>
                        <span>layanan@bpbatam.go.id</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="lucide lucide-clock text-blue-600 text-2xl"></i>
                        <span>Senin – Jumat, 08:00 – 16:00 WIB</span>
                    </li>
                </ul>
            </div>

            <!-- Peta -->
            <div class="rounded-2xl overflow-hidden shadow">
                <h3 class="bg-blue-700 text-white py-3 px-4 text-lg font-semibold">Lokasi Kami</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.035991588252!2d104.048!3d1.124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989f2d56b123%3A0xabcdef123456789!2sBP%20Batam!5e0!3m2!1sid!2sid!4v0000000" 
                    width="100%" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection

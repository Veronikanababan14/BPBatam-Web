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
    color: #ffffffff;
    margin-bottom: 20px;
}
.hero-text p {
    font-size: 1rem;
    margin-bottom: 30px;
    color: #ffffffff;
    text-shadow: 4px 4px 6px rgba(0,0,0,0.5)
}
.hero-buttons {
    margin-bottom: 25px;
}
.hero-buttons .btn-primary {
    background-color: #0056d2
    ;
    color: #ffffffff;
    font-weight: bold;
    border: none;
    padding: 14px 28px;
    font-size: 1rem;
    border-radius: 6px;
}
.hero-search input {
    background-color: #fff;
    color: #6b7280; /* abu-abu tailwind text-gray-500 */
    padding: 12px;
    font-size: 1rem;
    width: 100%;
    max-width: 400px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* shadow bawah */
}

.hero-image {
    flex: 1 1 40%;
    max-width: 40%;
    text-align: center;
    display: flex;
    align-items: center; /* tengah secara vertikal */
    justify-content: center;
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

/* ====== Tambahan khusus: Layanan Perizinan Unggulan ====== */
/* Mobile: swipe horizontal + snap */
@media (max-width: 767px) {
    .unggulan-scroll {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        gap: 1rem;
        padding: 0 1rem;
    }
    .unggulan-scroll > .unggulan-card {
        flex: 0 0 85%;
        scroll-snap-align: start;
    }
    .unggulan-scroll::-webkit-scrollbar {
        display: none; /* sembunyikan scrollbar di mobile */
    }
}
/* Desktop: grid 3 kolom, jarak mendekati space-x-18 (4.5rem) */
@media (min-width: 768px) {
    .unggulan-scroll {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 4.5rem;
        justify-items: center;
        overflow: visible;
        padding: 0;
    }
}
</style>

<section class="hero-section">
   <div class="hero-container">
    <!-- Teks -->
    <div class="hero-text">
        <h1 class="text-3xl font-bold text-white-700">
            Selamat Datang di Portal Layanan Perizinan
        </h1>
        <p class="text-gray-600 mt-2">
            Sistem perizinan yang cepat, transparan, dan terintegrasi untuk anda
        </p>
        <div class="hero-buttons mt-4">
            <a href="#" class="btn btn-primary">Jelajahi Layanan</a>
        </div>

        <!-- Search with icon -->
        <div class="relative max-w-sm mt-3 hero-search">
            <input type="text" 
                class="w-full p-3 pr-10 bg-white text-gray-600 placeholder-gray-400 rounded shadow-md focus:outline-none" 
                placeholder="Cari Layanan di sini...">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="h-5 w-5 text-blue-500 absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>
    </div> <!-- tutup hero-text -->

    <!-- Gambar Ilustrasi -->
    <div class="hero-image">
        <img src="{{ asset('images/hero-ilustration.png') }}" alt="Ilustrasi Layanan">
    </div>
</div>

</section>

    </div>
</div>

        </div>
</section>


<!-- Judul -->
<!-- Judul -->
<div class="mt-12 bg-slate-200 py-4">
    <h3 class="text-2xl font-bold text-center text-orange-500">
        Layanan Unggulan
    </h3>
</div>

<!-- ================= START: Carousel Layanan (dengan panah navigasi) ================= -->
<div class="relative max-w-screen-xl mx-auto px-4">

    <!-- Tombol Panah Kiri -->
    <button id="unggulan-prev"
        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-orange-500 text-white p-2 rounded-full shadow hover:bg-orange-600 z-10">
        &#10094;
    </button>

    <!-- Tombol Panah Kanan -->
    <button id="unggulan-next"
        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-orange-500 text-white p-2 rounded-full shadow hover:bg-orange-600 z-10">
        &#10095;
    </button>

    <!-- Carousel Scroll -->
    <div id="unggulan-scroll"
        class="flex overflow-x-auto space-x-4 py-6 scroll-smooth scrollbar-hide">
        
        <!-- Item 1 -->
        <div class="min-w-[250px] bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/layanan_1.png') }}" alt="Layanan 1" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan 1</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="min-w-[250px] bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/layanan_2.png') }}" alt="Layanan 2" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan 2</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="min-w-[250px] bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/layanan_3.png') }}" alt="Layanan 3" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan 3</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>

        <!-- Item 4 -->
        <div class="min-w-[250px] bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/layanan_4.png') }}" alt="Layanan 4" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan 4</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>

        <!-- Item 5 -->
        <div class="min-w-[250px] bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/layanan_5.png') }}" alt="Layanan 5" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan 5</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        
        <!-- Item 6 -->
        <div class="min-w-[250px] bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset('images/layanan_6.png') }}" alt="Layanan 6" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan 6</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>

        <!-- Tambah item sesuai kebutuhan -->
    </div>
</div>

<!-- Script Navigasi Panah -->
<script>
    const unggulanScroll = document.getElementById('unggulan-scroll');
    const prevBtn = document.getElementById('unggulan-prev');
    const nextBtn = document.getElementById('unggulan-next');

    prevBtn.addEventListener('click', () => {
        unggulanScroll.scrollBy({ left: -300, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
        unggulanScroll.scrollBy({ left: 300, behavior: 'smooth' });
    });
</script>

<!-- ================= END: Carousel Layanan (dengan panah navigasi) ================= -->


</section>

        <!-- Judul Daftar Layanan -->
        <div class="mt-12 bg-slate-200 py-4">
    <h3 class="text-2xl font-bold text-center text-orange-500">
        Perizinan Berdasarkan Kategori
    </h3>
</div>

<!-- Kategori -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 px-10">
    
    <!-- Kartu Perizinan 1 -->
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h4 class="text-lg font-semibold text-blue-700">Perizinan 1</h4>
        <p class="text-sm text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </p>
        <img src="{{ asset('images/perizinan1.jpg') }}" alt="" 
             class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" 
           class="block mt-3 bg-orange-500 text-white text-center py-2 px-21 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>

    <!-- Kartu Perizinan 2 -->
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h4 class="text-lg font-semibold text-blue-700">Perizinan 2</h4>
        <p class="text-sm text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </p>
        <img src="{{ asset('images/perizinan2.jpg') }}" alt="" 
             class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" 
           class="block mt-3 bg-orange-500 text-white text-center py-2 px-21 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>

    <!-- Kartu Perizinan 3 -->
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h4 class="text-lg font-semibold text-blue-700">Perizinan 3</h4>
        <p class="text-sm text-gray-600 mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...
        </p>
        <img src="{{ asset('images/perizinan3.jpg') }}" alt="" 
             class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" 
           class="block mt-3 bg-orange-500 text-white text-center py-2 px-21 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>

</div>

        </div>

    </section>
@endsection

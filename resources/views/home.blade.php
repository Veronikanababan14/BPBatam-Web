@extends('layouts.app')

@section('content')

<style>
.hero-section {
    background: url('{{ asset('images/background.jpg') }}') no-repeat center center;
    background-size: cover;
    padding: 100px 0; /* jarak besar atas bawah */
    border-radius: 20;
    overflow: hidden;
    margin-top: 20px /* kanan kiri full, jarak atas 100px */
}

.hero-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.hero-text {
    max-width: 50%;
    color: #fff;
}

.hero-text h1 {
    font-size: 2.5rem;
    font-weight: bold;
}

.hero-text p {
    font-size: 1.2rem;
    margin-top: 10px;
}

.hero-image {
    max-width: 45%;
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
        margin-top: 0;
    }
    .hero-container {
        flex-direction: column-reverse;
        padding: 0 20px;
    }
}

/* Search box styling */
.hero-search input {
    background-color: #fff;
    color: #6b7280;
    padding: 12px;
    font-size: 1rem;
    width: 100%;
    max-width: 400px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Carousel unggulan */
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
        display: none;
    }
}
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

<!-- Hero Section -->
<section class="hero-section">
   <div class="hero-container">
        <div class="hero-text">
            <h1>Selamat Datang di Portal Layanan Perizinan</h1>
            <p>Sistem perizinan yang cepat, transparan, dan terintegrasi untuk anda</p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-ilustration.png') }}" alt="Ilustrasi Layanan">
        </div>
    </div>
</section>

<!-- Layanan Unggulan -->
<div class="mt-12 bg-slate-200 py-6">
    <h4 class="text-2xl font-bold text-center text-orange-500 mb-6">
        Layanan Unggulan
    </h4>

    <!-- Tombol + Search -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-4 mb-6 px-4">
        <a href="#" class="btn btn-primary bg-blue-600 text-white font-bold py-3 px-6 rounded-md hover:bg-blue-700">
            Jelajahi Layanan
        </a>
        <div class="relative hero-search">
            <input type="text" placeholder="Cari Layanan di sini...">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="h-5 w-5 text-blue-500 absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" 
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>
    </div>
</div>

<!-- Carousel Layanan Unggulan -->
<div class="relative max-w-screen-xl mx-auto px-4 py-6">

    <!-- Tombol Arrow -->
    <button id="unggulan-prev"
        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-orange-500 text-white p-2 rounded-full shadow hover:bg-orange-600 z-10 text-lg">
        &#10094;
    </button>
    <button id="unggulan-next"
        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-orange-500 text-white p-2 rounded-full shadow hover:bg-orange-600 z-10 text-lg">
        &#10095;
    </button>

    <!-- Container Scroll -->
    <div id="unggulan-scroll" 
         class="flex overflow-x-auto gap-4 scroll-smooth scrollbar-hide px-2 sm:px-4 py-4 snap-x snap-mandatory">
        @for($i=1; $i<=6; $i++)
        <div class="w-[80vw] sm:w-[65vw] md:w-[45vw] lg:w-[300px] flex-shrink-0 bg-white rounded-lg shadow hover:shadow-lg transition snap-center">
            <img src="{{ asset("images/layanan_$i.png") }}" 
                 alt="Layanan {{ $i }}" 
                 class="w-full h-48 sm:h-56 md:h-48 lg:h-44 object-cover rounded-t-lg">
            <div class="p-4">
                <h4 class="font-bold text-lg text-orange-500">Layanan {{ $i }}</h4>
                <p class="text-gray-600 text-sm">Deskripsi layanan singkat...</p>
            </div>
        </div>
        @endfor
    </div>
</div>


<script>
const unggulanScroll = document.getElementById('unggulan-scroll');
const prevBtn = document.getElementById('unggulan-prev');
const nextBtn = document.getElementById('unggulan-next');

const card = unggulanScroll.querySelector('div'); // ambil card pertama
const style = getComputedStyle(card);
const cardWidth = card.offsetWidth + parseInt(style.marginRight);

prevBtn.addEventListener('click', () => {
    unggulanScroll.scrollBy({ left: -cardWidth, behavior: 'smooth' });
});

nextBtn.addEventListener('click', () => {
    unggulanScroll.scrollBy({ left: cardWidth, behavior: 'smooth' });
});
</script>





<!-- Perizinan Berdasarkan Kategori -->
<div class="mt-12 bg-slate-200 py-4">
    <h4 class="text-2xl font-bold text-center text-orange-500">
        Perizinan Berdasarkan Kategori
    </h4>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 px-10">
    @for($i=1; $i<=3; $i++)
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center text-center">
        <h5 class="text-lg font-semibold text-blue-700">Perizinan {{ $i }}</h5>
        <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <img src="{{ asset("images/perizinan$i.jpg") }}" alt="" class="w-64 h-40 object-cover rounded mt-4 mx-auto">
        <div class="flex items-center mt-3 text-sm text-gray-500">
            ❌ <span class="ml-2">Tonton Video Penjelasan</span>
        </div>
        <a href="#" class="block mt-3 bg-orange-500 text-white text-center py-2 px-4 rounded font-semibold hover:bg-orange-600">
            Lihat Detail
        </a>
    </div>
    @endfor
</div>

@endsection

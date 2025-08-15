@extends('layouts.app')

@section('content')

<style>
/* HERO SECTION */
.hero-section {
    background: url('{{ asset('images/background.jpg') }}') no-repeat center center;
    background-size: cover;
    padding: 100px 0;
    border-radius: 20px;
    margin-top: 20px;
    overflow: hidden;
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
    .hero-container {
        flex-direction: column-reverse;
        text-align: center;
    }
    .hero-text, .hero-image {
        max-width: 100%;
    }
}

/* SEARCH BOX */
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

/* CAROUSEL UNGGULAN */
.unggulan-scroll {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    gap: 1rem;
    padding: 0 1rem;
}
.unggulan-scroll::-webkit-scrollbar {
    display: none;
}
.unggulan-card {
    flex: 0 0 85%;
    scroll-snap-align: center;
}
@media (min-width: 768px) {
    .unggulan-scroll {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        overflow: visible;
        padding: 0;
    }
    .unggulan-card {
        flex: unset;
        scroll-snap-align: unset;
    }
}

/* TOMBOL ARROW */
/* Default untuk Desktop / Tablet */
.arrow-btn {
    padding: 0.25rem 0.4rem;
    font-size: 0.8rem;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #f97316;
    color: white;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    z-index: 10;
    cursor: pointer;
    transition: background 0.2s ease;
}
.arrow-btn:hover {
    background-color: #ea580c;
}

/* Mobile lebih kecil */
@media (max-width: 640px) {
    .arrow-btn {
        padding: 0.15rem 0.3rem;
        font-size: 0.6rem;
    }
}
.unggulan-card img {
    width: 100%;
    height: auto; /* tinggi menyesuaikan */
    object-fit: contain; /* tidak memotong gambar */
}
/* Desktop */
.unggulan-card img {
    width: 100%;
    height: auto;
    object-fit: contain; /* gambar utuh, tidak terpotong */
}
.unggulan-card img {
    display: block;
    margin: 0 auto;
}


/* Mobile */
@media (max-width: 640px) {
    .unggulan-card img {
        height: auto;       /* tinggi otomatis mengikuti gambar */
        max-height: none;   /* pastikan tidak ada batas tinggi */
        object-fit: contain; /* gambar utuh */
    }
}


</style>

<!-- LAYANAN UNGGULAN -->
<div class="relative max-w-screen-xl mx-auto px-4 py-6">
    <!-- Tombol Arrow -->
    <button id="unggulan-prev"
        class="arrow-btn absolute left-2 transform -translate-y-1/2 bg-orange-500 text-white rounded-full shadow hover:bg-orange-600 z-10">
        &#10094;
    </button>
    <button id="unggulan-next"
        class="arrow-btn absolute right-2 transform -translate-y-1/2 bg-orange-500 text-white rounded-full shadow hover:bg-orange-600 z-10">
        &#10095;
    </button>

    <!-- Container Scroll -->
    <div id="unggulan-scroll" class="unggulan-scroll scroll-smooth">
        @for($i=1; $i<=6; $i++)
        <div class="unggulan-card bg-white rounded-lg shadow hover:shadow-lg transition">
            <img src="{{ asset("images/layanan_$i.png") }}"
     alt="Layanan {{ $i }}"
     class="w-full h-[200px] object-cover sm:h-auto sm:object-contain rounded-t-lg">

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

function scrollAmount() {
    if (window.innerWidth < 768) {
        return unggulanScroll.offsetWidth * 0.85;
    }
    return 300;
}

prevBtn.addEventListener('click', () => {
    unggulanScroll.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
});
nextBtn.addEventListener('click', () => {
    unggulanScroll.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
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

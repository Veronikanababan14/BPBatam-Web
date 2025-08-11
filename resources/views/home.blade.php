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
            <h1>Selamat Datang di Portal Layanan Perizinan</h1>
            <p>Sistem perizinan yang cepat, transparan, dan terintegrasi untuk anda</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Jelajahi Layanan</a>
            </div>
            <div class="hero-search">
                <input type="text" placeholder="Cari layanan disini...">
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-ilustration.png') }}" alt="Ilustrasi Perizinan">
        </div>
    </div>
</section>

{{-- Konten Layanan --}}
<section class="container my-5">
    <h2 class="mb-4">Layanan Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Layanan 1</h5>
                <p>Deskripsi layanan.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Layanan 2</h5>
                <p>Deskripsi layanan.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Layanan 3</h5>
                <p>Deskripsi layanan.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-10 px-4">
  <div class="bg-white rounded-2xl shadow-xl w-full max-w-5xl overflow-hidden">
    <div class="grid md:grid-cols-2">

      {{-- Kolom kiri: ilustrasi (putih) --}}
      <div class="hidden md:flex items-center justify-center p-10 bg-white">
        <img src="{{ asset('images/illustration_login.png') }}"
             alt="Ilustrasi Login" class="w-full max-w-sm h-auto">
      </div>

      {{-- Kolom kanan: FORM (biru) --}}
      <div class="bg-[#0b1d63] p-8 md:p-10 flex flex-col justify-center">
        <h2 class="text-3xl font-bold text-white mb-8">Login</h2>

        <form method="POST" action="#">
          @csrf

          {{-- Email --}}
<div class="mb-4">
  <label for="email" class="sr-only">Email</label>
  <div class="flex items-center border-2 border-amber-400 bg-white rounded-lg px-3 py-2
              focus-within:ring-2 focus-within:ring-white/60">
    {{-- icon user --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         fill="currentColor" class="w-5 h-5 text-[#0b1d63]">
      <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm7 8a7 7 0 0 0-14 0 1 1 0 0 0 1 1h12a1 1 0 0 0 1-1Z"/>
    </svg>
    <input id="email" name="email" type="email" required
           class="w-full bg-white border-0 focus:ring-0 px-3
                  placeholder-[#0b1d63]/70 text-[#0b1d63]"
           placeholder="Email">
  </div>
</div>

{{-- Password --}}
<div class="mb-5">
  <label for="password" class="sr-only">Password</label>
  <div class="flex items-center border-2 border-amber-400 bg-white rounded-lg px-3 py-2
              focus-within:ring-2 focus-within:ring-white/60">
    {{-- icon lock --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         fill="currentColor" class="w-5 h-5 text-[#0b1d63]">
      <path d="M17 10h-1V7a4 4 0 0 0-8 0v3H7a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1Zm-7-3a2 2 0 1 1 4 0v3h-4Z"/>
    </svg>
    <input id="password" name="password" type="password" required
           class="w-full bg-white border-0 focus:ring-0 px-3
                  placeholder-[#0b1d63]/70 text-[#0b1d63]"
           placeholder="Password">
  </div>
</div>


          {{-- Ingat saya + Lupa password --}}
          <div class="flex items-center justify-between text-sm text-white mb-6">
            <label class="inline-flex items-center gap-2">
              <input type="checkbox" name="remember" class="rounded">
              <span>Ingat saya</span>
            </label>
            <a href="#" class="underline decoration-white/40 hover:decoration-white">
              Lupa password?
            </a>
          </div>

          {{-- Tombol --}}
          <button type="submit"
                  class="w-full bg-white text-[#0b1d63] font-semibold py-2.5 rounded-lg
                         hover:bg-gray-100 transition">
            Masuk
          </button>

          <p class="text-center text-sm text-white/80 mt-4">
            Tidak punya akun?
            <a href="#" class="font-semibold underline">Daftar</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

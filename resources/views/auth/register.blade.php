@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-10 px-4">
  <div class="bg-white rounded-2xl shadow-xl w-full max-w-5xl overflow-hidden">
    <div class="grid md:grid-cols-2">

      {{-- Kolom kiri: FORM (biru) --}}
      <div class="bg-[#0b1d63] p-8 md:p-10 flex flex-col justify-center">
        <h2 class="text-3xl font-bold text-white mb-8">Daftar</h2>

        <form method="POST" action="{{ route('register') }}">
          @csrf

          {{-- Full Name --}}
          <div class="mb-4">
            <label for="name" class="sr-only">Full Name</label>
            <div class="flex items-center border-2 border-amber-400 bg-white rounded-lg px-3 py-2
                        focus-within:ring-2 focus-within:ring-white/60">
              {{-- icon user --}}
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                   fill="currentColor" class="w-5 h-5 text-[#0b1d63]">
                <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm7 8a7 7 0 0 0-14 0 1 1 0 0 0 1 1h12a1 1 0 0 0 1-1Z"/>
              </svg>
              <input id="name" name="name" type="text" required
                     class="w-full bg-white border-0 focus:ring-0 px-3
                            placeholder-[#0b1d63]/70 text-[#0b1d63]"
                     placeholder="Full Name">
            </div>
          </div>

          {{-- Email --}}
          <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <div class="flex items-center border-2 border-amber-400 bg-white rounded-lg px-3 py-2
                        focus-within:ring-2 focus-within:ring-white/60">
              {{-- icon email --}}
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                   fill="currentColor" class="w-5 h-5 text-[#0b1d63]">
                <path d="M4 4h16a2 2 0 0 1 2 2v.01L12 13 2 6.01V6a2 2 0 0 1 2-2Zm0 4.236V18h16V8.236l-7.386 4.924a2 2 0 0 1-2.228 0L4 8.236Z"/>
              </svg>
              <input id="email" name="email" type="email" required
                     class="w-full bg-white border-0 focus:ring-0 px-3
                            placeholder-[#0b1d63]/70 text-[#0b1d63]"
                     placeholder="Email Address">
            </div>
          </div>

          {{-- Password --}}
          <div class="mb-4">
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

          {{-- Confirm Password --}}
          <div class="mb-6">
            <label for="password_confirmation" class="sr-only">Confirm Password</label>
            <div class="flex items-center border-2 border-amber-400 bg-white rounded-lg px-3 py-2
                        focus-within:ring-2 focus-within:ring-white/60">
              {{-- icon check --}}
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                   fill="currentColor" class="w-5 h-5 text-[#0b1d63]">
                <path d="M9 16.17 4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17Z"/>
              </svg>
              <input id="password_confirmation" name="password_confirmation" type="password" required
                     class="w-full bg-white border-0 focus:ring-0 px-3
                            placeholder-[#0b1d63]/70 text-[#0b1d63]"
                     placeholder="Confirm Password">
            </div>
          </div>

          {{-- Tombol --}}
          <button type="submit"
                  class="w-full bg-white text-[#0b1d63] font-semibold py-2.5 rounded-lg
                         hover:bg-gray-100 transition">
            Register
          </button>

          <p class="text-center text-sm text-white/80 mt-4">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-semibold underline">Login</a>
          </p>
        </form>
      </div>

      {{-- Kolom kanan: ilustrasi (putih) --}}
      <div class="hidden md:flex items-center justify-center p-10 bg-white">
        <img src="{{ asset('images/illustration_register.png') }}"
             alt="Ilustrasi Register" class="w-full max-w-sm h-auto">
      </div>

    </div>
  </div>
</div>
@endsection

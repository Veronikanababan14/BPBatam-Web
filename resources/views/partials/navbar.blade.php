<nav class="fixed top-0 left-0 w-full z-50 bg-white border-gray-200 shadow">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/logobpbatam.png') }}" class="h-12" alt="Logo" />
    </a>

    <!-- Hamburger Button -->
    <button 
      type="button" 
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" 
      aria-controls="mobile-menu" 
      aria-expanded="false"
      onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>

    <!-- Menu Desktop -->
    <div class="hidden md:flex gap-x-24">
        <!-- Menu Left -->
        <div class="my-auto">
          <ul class="font-medium text-lg flex flex-row md:space-x-8">
            <li><a href="{{ route('beranda') }}" class="block py-2 px-3 text-blue-700 font-bold">Beranda</a></li>
            <li><a href="{{ route('layanan') }}" class="block py-2 px-3 text-blue-700 hover:bg-gray-100 md:hover:bg-transparent font-bold">Layanan</a></li>
            <li><a href="{{ route('faq') }}" class="block py-2 px-3 text-blue-700 hover:bg-gray-100 md:hover:bg-transparent font-bold">FAQ</a></li>
            <li><a href="{{ route('kontak') }}" class="block py-2 px-3 text-blue-700 hover:bg-gray-100 md:hover:bg-transparent font-bold">Kontak</a></li>
          </ul>
        </div>

        <!-- Menu Right -->
        <div class="my-auto">
          <ul class="font-medium text-lg flex flex-row md:space-x-8 items-center">
            <li>
              <a href="{{ route('login') }}" class="block py-2 px-3 text-orange-500 font-bold">
                Login
              </a>
            </li>
            <li>
  <a href="{{ route('register') }}"
     class="inline-flex justify-center items-center text-base leading-none text-white bg-blue-700 hover:bg-blue-800 px-4 py-2.5 rounded-lg font-bold shadow">
    Sign Up
  </a>
</li>

          </ul>
        </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-md">
      <ul class="flex flex-col p-4 space-y-2 font-medium">
        <li><a href="{{ route('beranda') }}" class="block py-2 px-3 text-blue-700 font-bold">Beranda</a></li>
        <li><a href="{{ route('layanan') }}" class="block py-2 px-3 text-blue-700 font-bold">Layanan</a></li>
        <li><a href="{{ route('faq') }}" class="block py-2 px-3 text-blue-700 font-bold">FAQ</a></li>
        <li><a href="{{ route('kontak') }}" class="block py-2 px-3 text-blue-700 font-bold">Kontak</a></li>
        <li><a href="{{ route('login') }}" class="block py-2 px-3 text-orange-500 font-bold">Login</a></li>
        <li><a href="{{ route('register') }}" class="flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 px-3 py-1.5 rounded-sm font-bold text-sm">Sign Up</a></li>
      </ul>
  </div>
</nav>

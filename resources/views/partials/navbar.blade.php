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
        <div class="my-auto relative">
          <ul class="font-medium text-lg flex flex-row md:space-x-8">
            <li><a href="{{ route('beranda') }}" class="block py-2 px-3 text-blue-700 font-bold">Beranda</a></li>

            <!-- Dropdown Layanan -->
            <li class="relative group">
              <button class="flex items-center py-2 px-3 text-blue-700 font-bold hover:bg-gray-100 md:hover:bg-transparent">
                Layanan
                <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>

              <!-- Dropdown Menu -->
              <ul class="absolute left-0 top-full mt-1 hidden group-hover:block bg-white border border-gray-200 shadow-md rounded-md w-48 z-50">
                <li><a href="{{ route('perizinan1', ['kategori' => 'kategori1']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perizinan 1</a></li>
                <li><a href="{{ route('perizinan2', ['kategori' => 'kategori2']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perizinan 2</a></li>
                <li><a href="{{ route('perizinan3', ['kategori' => 'kategori3']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perizinan 3</a></li>
              </ul>
            </li>

            <li><a href="{{ route('faq') }}" class="block py-2 px-3 text-blue-700 hover:bg-gray-100 md:hover:bg-transparent font-bold">FAQ</a></li>
            <li><a href="{{ route('kontak') }}" class="block py-2 px-3 text-blue-700 hover:bg-gray-100 md:hover:bg-transparent font-bold">Kontak</a></li>

            {{-- Tambahan: Admin Dashboard (desktop) --}}
            @auth
              @if(auth()->user()->role === 'admin')
                <li>
                  <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 text-green-600 font-bold">
                    Admin Dashboard
                  </a>
                </li>
              @endif
            @endauth
          </ul>
        </div>

        <!-- Menu Right -->
        <div class="my-auto">
          <ul class="font-medium text-lg flex flex-row md:space-x-8 items-center">
            @guest
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
            @endguest

            @auth
              <li>
                <form action="{{ route('admin.logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="block py-2 px-3 text-red-600 font-bold hover:underline">
                    Logout
                  </button>
                </form>
              </li>
            @endauth
          </ul>
        </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-md">
      <ul class="flex flex-col p-4 space-y-2 font-medium">
        <li><a href="{{ route('beranda') }}" class="block py-2 px-3 text-blue-700 font-bold">Beranda</a></li>

        <!-- Mobile Dropdown Layanan -->
        <li class="block">
          <button onclick="document.getElementById('mobile-layanan').classList.toggle('hidden')" class="w-full text-left flex justify-between items-center py-2 px-3 text-blue-700 font-bold">
            Layanan
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <ul id="mobile-layanan" class="hidden flex flex-col pl-4 mt-1 space-y-1">
            <li><a href="{{ route('perizinan1', ['kategori' => 'kategori1']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perizinan 1</a></li>
            <li><a href="{{ route('perizinan2', ['kategori' => 'kategori2']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perizinan 2</a></li>
            <li><a href="{{ route('perizinan3', ['kategori' => 'kategori3']) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perizinan 3</a></li>
          </ul>
        </li>

        <li><a href="{{ route('faq') }}" class="block py-2 px-3 text-blue-700 font-bold">FAQ</a></li>
        <li><a href="{{ route('kontak') }}" class="block py-2 px-3 text-blue-700 font-bold">Kontak</a></li>

        {{-- Tambahan: Admin Dashboard (mobile) --}}
        @auth
          @if(auth()->user()->role === 'admin')
            <li>
              <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 text-green-600 font-bold">
                Admin Dashboard
              </a>
            </li>
          @endif
        @endauth

        @guest
          <li><a href="{{ route('login') }}" class="block py-2 px-3 text-orange-500 font-bold">Login</a></li>
          <li><a href="{{ route('register') }}" class="flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 px-3 py-1.5 rounded-sm font-bold text-sm">Sign Up</a></li>
        @endguest

        @auth
          <li>
            <form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

          </li>
        @endauth
      </ul>
  </div>
</nav>

<footer class="bg-blue-900 text-white py-10">
    <div class="container mx-auto px-4">
        <!-- Grid 4 kolom dengan border vertikal -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Kolom 1: Logo dan Deskripsi -->
            <div>
                <img src="{{ asset('images/logobpbatam.png') }}" alt="Logo BP Batam" class="mb-4 w-32">
                <p class="text-sm leading-relaxed">
                    Portal Layanan BP Batam adalah sistem digital yang terintegrasi untuk mempermudah masyarakat dalam mengakses layanan perizinan dan informasi lainnya secara cepat, transparan, dan efisien.
                </p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="md:border-l md:border-white/40 md:pl-6">
                <h3 class="font-semibold text-lg mb-3">Navigasi</h3>
                <ul class="space-y-1">
                    <li><a href="{{ url('/') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ url('/layanan') }}" class="hover:underline">Layanan</a></li>
                    <li><a href="{{ url('/faq') }}" class="hover:underline">FAQ</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Informasi + Media Sosial -->
            <div class="md:border-l md:border-white/40 md:pl-6">
                <h3 class="font-semibold text-lg mb-3">Informasi</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="hover:underline">Peta Situs</a></li>
                </ul>
                <h4 class="font-semibold text-lg mt-4 mb-2">Media Sosial</h4>
                <div class="flex space-x-4">
                    <img src="{{ asset('images/fb.png') }}" alt="Facebook" class="w-6 h-6">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="w-6 h-6">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-6 h-6">
                    <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="w-6 h-6">
                </div>
            </div>

            <!-- Kolom 4: Hubungi Kami -->
            <div class="md:border-l md:border-white/40 md:pl-6">
                <h3 class="font-semibold text-lg mb-3">Hubungi Kami</h3>
                <div class="flex items-start text-sm mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-400 mt-1 mr-2" fill="none" viewBox="0 0 25 25"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
                    </svg>
                    <p>Jl. Ibnu Sutowo No.1, Batam Centre<br>Batam, Kepulauan Riau, Indonesia, 29400</p>
                </div>
                <div class="flex items-center text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.2 3.6a1 1 0 01-.27 1.06l-1.74 1.74a16 16 0 006.28 6.28l1.74-1.74a1 1 0 011.06-.27l3.6 1.2a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <p>(62-778) 462047, 462048</p>
                </div>
            </div>
        </div>

        <!-- Footer Copyright -->
        <div class="mt-10 border-t border-white/40 pt-4 text-center text-sm text-gray-300">
            &copy; copyright by <span class="text-yellow-400 font-semibold">BPBatam</span>
        </div>
    </div>
</footer>

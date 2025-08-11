<footer class="bg-blue-900 text-white py-10">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-between">

            <!-- Kolom 1: Logo dan Deskripsi -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <img src="{{ asset('images/logo.png') }}" alt="Logo BP Batam" class="mb-4 w-32">
                <p class="text-sm">
                    Portal Layanan BP Batam adalah sistem digital yang terintegrasi untuk mempermudah masyarakat dalam mengakses layanan perizinan dan informasi lainnya secara cepat, transparan, dan efisien.
                </p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="w-full md:w-1/5 mb-6 md:mb-0">
                <h3 class="font-semibold text-lg mb-2">Navigasi</h3>
                <ul class="space-y-1">
                    <li><a href="{{ url('/') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ url('/layanan') }}" class="hover:underline">Layanan</a></li>
                    <li><a href="{{ url('/faq') }}" class="hover:underline">FAQ</a></li>
                    <li><a href="{{ url('/kontak') }}" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Informasi + Media Sosial -->
<div class="w-full md:w-1/5 mb-6 md:mb-0 flex flex-col items-center">
    <h3 class="font-semibold text-lg mb-2 text-center">Informasi</h3>
    <ul class="space-y-1 text-center">
        <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
        <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
        <li><a href="#" class="hover:underline">Peta Situs</a></li>
    </ul>
    <div class="w-full md:w-1/5 mb-6 md:mb-0 flex flex-col items-center">
    <h3 class="font-semibold text-lg mb-2 text-center">Media Sosial</h3>
    <ul class="space-y-1 text-center">
    <div class="flex justify-center mt-4 space-x-4">
        <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-6 h-6"></a>
        <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="w-6 h-6"></a>
        <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-6 h-6"></a>
        <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="YouTube" class="w-6 h-6"></a>

        
    </div>
</div>


            <!-- Kolom 4: Hubungi Kami -->
            <div class="w-full md:w-1/4">
                <h3 class="font-semibold text-lg mb-2">Hubungi Kami</h3>
                <p class="text-sm">Jl. Ibnu Sutowo No.1, Batam Centre<br>Batam, Kepulauan Riau, Indonesia, 29400</p>
                <p class="text-sm mt-2">Telp: (62-778) 462047, 462048</p>
            </div>

        </div>

        <!-- Footer Copyright -->
        <div class="mt-10 border-t border-white/20 pt-4 text-center text-sm text-/70 text-orange-700">
            &copy; copyright By BPBatam
        </div>
    </div>
</footer>

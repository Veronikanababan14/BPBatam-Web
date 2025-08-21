@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center mb-8 text-blue-700">❓ Frequently Asked Questions (FAQ) BP Batam</h1>

    <div class="space-y-4">
        <!-- Item FAQ -->
        <div class="border rounded-xl shadow-sm p-5">
            <button onclick="toggleFaq(1)" class="flex justify-between items-center w-full text-left">
                <span class="font-semibold text-lg text-gray-800">Apa itu layanan perizinan BP Batam?</span>
                <svg id="icon-1" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <p id="answer-1" class="mt-2 text-gray-600 hidden">
                Layanan perizinan BP Batam adalah sistem yang memfasilitasi masyarakat dan pelaku usaha dalam mengurus berbagai izin usaha, izin lokasi, PBG, izin lingkungan, hingga perizinan tenaga kerja asing secara mudah dan transparan.
            </p>
        </div>

        <!-- Item FAQ -->
        <div class="border rounded-xl shadow-sm p-5">
            <button onclick="toggleFaq(2)" class="flex justify-between items-center w-full text-left">
                <span class="font-semibold text-lg text-gray-800">Bagaimana cara mengajukan izin di BP Batam?</span>
                <svg id="icon-2" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <p id="answer-2" class="mt-2 text-gray-600 hidden">
                Permohonan izin dapat dilakukan secara online melalui portal layanan BP Batam atau datang langsung ke kantor PTSP (Pelayanan Terpadu Satu Pintu).
            </p>
        </div>

        <!-- Item FAQ -->
        <div class="border rounded-xl shadow-sm p-5">
            <button onclick="toggleFaq(3)" class="flex justify-between items-center w-full text-left">
                <span class="font-semibold text-lg text-gray-800">Berapa lama proses penerbitan izin?</span>
                <svg id="icon-3" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <p id="answer-3" class="mt-2 text-gray-600 hidden">
                Waktu penerbitan izin bervariasi, mulai dari 1–14 hari kerja tergantung jenis izin dan kelengkapan dokumen.
            </p>
        </div>

        <!-- Item FAQ -->
        <div class="border rounded-xl shadow-sm p-5">
            <button onclick="toggleFaq(4)" class="flex justify-between items-center w-full text-left">
                <span class="font-semibold text-lg text-gray-800">Siapa yang bisa saya hubungi jika mengalami kesulitan?</span>
                <svg id="icon-4" class="w-5 h-5 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <p id="answer-4" class="mt-2 text-gray-600 hidden">
                Anda dapat menghubungi Call Center BP Batam di <b>1500671</b> atau melalui email resmi <b>ptsp@bpbatam.go.id</b>.
            </p>
        </div>
    </div>
</div>

<script>
    function toggleFaq(id) {
        const answer = document.getElementById(`answer-${id}`);
        const icon = document.getElementById(`icon-${id}`);

        if (answer.classList.contains("hidden")) {
            answer.classList.remove("hidden");
            icon.classList.add("rotate-180");
        } else {
            answer.classList.add("hidden");
            icon.classList.remove("rotate-180");
        }
    }
</script>
@endsection

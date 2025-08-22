@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h2 class="text-xl font-bold mb-6">
        Menampilkan hasil untuk: 
        <span class="text-blue-600">"{{ request('q') }}"</span>
    </h2>

    @if($results->isEmpty())
        <p class="text-gray-600">Tidak ada hasil ditemukan.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($results as $result)
                <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-lg transition duration-300">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        {{ $result->title }}
                    </h3>
                    <p class="text-gray-600 mb-4">
                        {{ Str::limit($result->deskripsi, 100) }}
                    </p>
                    <span class="inline-block text-sm px-3 py-1 rounded-full bg-blue-100 text-blue-700">
                        {{ $result->type }}
                    </span>

                    @php
                        $link = $result->type === 'layanan' 
                                ? url('layanan/'.$result->id) 
                                : url('perizinan/'.$result->id);
                    @endphp

                    <div class="mt-4">
                        <a href="{{ $link }}" 
                           class="text-blue-600 hover:text-blue-800 font-medium">
                            Selengkapnya →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

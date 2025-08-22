{{-- resources/views/search/results.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Hasil Pencarian</h2>

    {{-- Form Pencarian --}}
    <form action="{{ route('search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="q" class="form-control"
                   placeholder="Cari layanan atau perizinan..."
                   value="{{ $query }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

    @if($query)
        <p class="text-muted">
            Menampilkan hasil untuk: <strong>"{{ $query }}"</strong>
        </p>
    @endif

    {{-- Hasil Pencarian --}}
    @if($results->count() > 0)
        <div class="row">
            @foreach($results as $result)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $result->title }}</h5>
                            <p class="card-text">{{ Str::limit($result->deskripsi, 100) }}</p>
                            <span class="badge bg-secondary text-capitalize">
                                {{ $result->type }}
                            </span>
                            <br>
                            <a href="#" class="btn btn-outline-primary btn-sm mt-2">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-muted">Tidak ada hasil yang ditemukan.</p>
    @endif
</div>
@endsection

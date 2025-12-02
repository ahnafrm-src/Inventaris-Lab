@extends('default')

@section('title', 'Barang')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>Data Barang</h2>
        </div>
        

        @foreach ($barang as $brng)
            <div class="card" style="display:inline-block; margin: 1rem; box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <h5 class="card-title">{{ $brng->nama_barang }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $brng->kondisi }}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up 
                        card's
                        content.</p>
                    <a href="{{ route('barang.show', $brng->id) }}" class="card-link">Lebih lanjut....</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection

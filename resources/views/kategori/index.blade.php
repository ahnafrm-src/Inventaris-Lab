@extends('default')

@section('title', 'Kategori')
@section('css', '/css/barang.css')
@section('content')
    <div>
        <div class="barang-header">
            <h2>Kategori</h2>
        </div>

        <nav class="nav nav-pills nav-justified" style="margin-top: 1rem">
            @foreach ($kategori as $ktgr)
                <a class="nav-link" style="background: #EEEEEE; color: #1f2937; margin: 0 10px ; box-shadow: 8px 8px 8px rgba(0.1, 0.1, 0.1, 0.1);" href="{{ route('kategori.show', $ktgr->id) }}">{{ $ktgr->kategori }}</a>
            @endforeach
        </nav>
    </div>
@endsection

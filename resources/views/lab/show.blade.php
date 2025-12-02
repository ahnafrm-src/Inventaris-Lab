@extends('default')

@section('title', 'lab')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>{{ $lab->nama_lab }}</h2>
        </div>

         <form action="{{ route('labs.show', $lab->id) }}" method="GET">
            @csrf
            <div class="input-group" style="margin: 10px auto; max-width: 672px;">
                <input name="search" type="text" class="form-control" placeholder="Cari Nama Barang..." aria-label="Recipient's username" aria-describedby="button-addon2" value="@if($keyword) {{$keyword}} @endif">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                <a class="btn btn-outline-secondary" href="{{ route('labs.show', $lab->id) }}" id="button-addon2">Kembali</a>
            </div>
        </form>

        <div style="text-align: center;">
            @foreach ($lab->barangs as $barang)
            <div class="card" style="text-align: left;margin: 15px; width: 500px; display:inline-block; box-shadow: 8px 8px 8px rgba(0,0,0,0.1);">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }} ({{ $barang->jumlah }})</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $barang->kondisi }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $barang->lokasi }}</h6>
                   <a href="{{ route('barang.edit', $barang->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="post"
                        style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
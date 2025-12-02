@extends('default')

@section('title')
Barang | {{ $barang->nama_barang }}
@endsection 

@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>{{ $barang->nama_barang }} ( {{ $barang->kategoris->kategori }} )</h2>
        </div>


        <div class="container-md" style="background: #fffdfd;; margin: 20px auto; padding: 20px; color: #1f2937; border-radius:50px">
            <h6>Kondisi Barang: {{ $barang->kondisi }}</h6>
            <h6>Jumlah Barang: {{ $barang->jumlah }}</h6>
            <h6>Lokasi Barang: {{ $barang->lokasi }}</h6>
            <h6 style="display:inline">Orang yang pinjam:</h6>
            @foreach ($barang->peminjamans as $peminjaman)
               @if ($peminjaman->status == "dipinjam")
                    <p>{{ $peminjaman->peminjams->nama_peminjam }}</p>
                @else
                    <br>
                    <br>
                    @php
                        break;
                    @endphp
               @endif
            @endforeach
            @php
                $i= (int) $barang->jumlah;
            @endphp
            {{-- @for ($j=1; $j <= (int) $barang->jumlah; $j++)
                @php $i++ @endphp
            @endfor --}}
            @foreach ($barang->peminjamans as $peminjaman)
                @if ($peminjaman->status == 'dipinjam')
                    @php $i--; @endphp
                @endif
            @endforeach

            <h6>Sisa Jumlah: {{ $i }}</h6>
        </div>

    </div>
@endsection

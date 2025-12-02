@extends('default')

@section('title', 'Barang Dashboard')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>Data Barang</h2>
        </div>
        <div class="barang-content">
            <a href="{{ route('barang.create') }}" class="tambah-data">Tambah Data</a>

            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif

            <div class="table-wrapper">
                <table class="barang-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Sisa Jumlah</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $brng)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a style="text-decoration:none; color:#1f2937"
                                        href="{{ route('barang.show', $brng->id) }}">{{ $brng->nama_barang }}</a></td>
                                <td>{{ $brng->kategoris ? $brng->kategoris->kategori : '-' }}</td>
                                <td>{{ $brng->jumlah }}</td>
                                <td>@php
                                    $i = (int) $brng->jumlah;
                                @endphp
                                    @foreach ($brng->peminjamans as $peminjaman)
                                        @if ($peminjaman->status == 'dipinjam')
                                            @php $i--; @endphp
                                        @endif
                                    @endforeach
                                    {{ $i }}
                                </td>
                                <td>
                                    <div
                                        class="
                        @if ($brng->kondisi == 'baik') kondisi-baik
                        @elseif ($brng->kondisi == 'kurang baik')
                            kondisi-peringatan
                        @else
                            kondisi-rusak @endif">
                                        {{ $brng->kondisi }}</div>
                                </td>
                                <td>{{ $brng->lab->nama_lab }}</td>
                                <td>
                                    <a href="{{ route('barang.edit', $brng->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('barang.destroy', $brng->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@extends('default')

@section('title', 'Peminjam')
@section('css', '/css/barang.css')

@section("content")
<div>
    <div class="barang-container">
        <div class="barang-header">
            <h2>Data Peminjam (dashboard)</h2>
        </div>
        <div class="barang-content">
            <a href="{{ route('peminjam.create') }}" class="tambah-data">Daftar Peminjam</a>


            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif

            <div class="table-wrapper">
                <table class="barang-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Tipe peminjam</th>
                            <th>kontak</th>
                            <th>kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjams as $peminjam)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peminjam->nama_peminjam }}</td>
                                <td>{{ $peminjam->tipe_peminjam}}</td>
                                <td>{{ $peminjam->kontak }}</td>
                                <td>{{ $peminjam->kelas }}</td>
                                <td>
                                    <a href="{{ route('peminjam.edit', $peminjam->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('peminjam.destroy', $peminjam->id) }}" method="post"
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
</div>
@endsection
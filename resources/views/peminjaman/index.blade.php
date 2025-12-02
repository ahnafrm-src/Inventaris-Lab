@extends('default')

@section('title', 'dashboard Transaksi Peminjaman')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>Transaksi Peminjaman</h2>
        </div>

        <div class="barang-content">
            <a href="{{ route('peminjaman.create') }}" class="tambah-data">Tambah Transaksi Peminjaman</a>
            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif
            <div class="table-wrapper">
                <table class="barang-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama peminjam</th>
                            <th>status</th>
                            <th>Tanggal Dipinjam</th>
                            <th>Tanggal Dikembalikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $peminjaman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peminjaman->barangs->nama_barang}}</td>
                                <td>{{ $peminjaman->peminjams->nama_peminjam }}</td>
                                <td><span style="background-color: {{ $peminjaman->status == 'dipinjam' ? 'red' : 'green'}}; color: white; padding: 10px; border-radius: 50px;font-size: 0.75rem;">{{ $peminjaman->status }}</span></td>
                                <td>{{ $peminjaman->created_at }}</td>
                                <td>{{ $peminjaman->tanggal_dikembalikan }}</td>
                                <td>
                                    <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="post"
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
    @endsection

@extends('default')

@section('title', 'Tambah Transaksi Peminjaman')

@section('content')
<div style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; border-radius: 0.5rem; padding: 1.5rem 2rem; margin: 10px auto; max-width: 672px;">
    <h2 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">Tambah Data</h2>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="barang" class="form-label">Barang</label>
            <select name="barang_id" id="barang" class="form-select">
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="barang" class="form-label">Peminjam</label>
            <select name="peminjam_id" id="barang" class="form-select">
                @foreach ($peminjams as $peminjam)
                    <option value="{{ $peminjam->id }}">{{ $peminjam->nama_peminjam }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="dipinjam">Dipinjam</option>
                <option value="dikembalikan">Dikembalikan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
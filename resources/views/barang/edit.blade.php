@extends('default')

@section('title', 'Edit Barang')

@section('content')
<div style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; border-radius: 0.5rem; padding: 1.5rem 2rem; margin: 2rem auto; max-width: 672px;">
    <h2 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">Tambah Data</h2>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-4">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}">
        </div>
        <div class="mb-4">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori_id" id="kondisi" class="form-select">
                @foreach ($kategori as $ktgr)
                    <option value="{{ $ktgr->id }}">{{ $ktgr->kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="text" name="jumlah" class="form-control" value="{{ $barang->jumlah }}">
        </div>
        <div class="mb-4">
            <label for="kondisi" class="form-label">Kondisi</label>
            <select name="kondisi" id="kondisi" class="form-select">
                <option value="baik">Baik</option>
                <option value="kurang baik">Kurang Baik</option>
                <option value="rusak">Rusak</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $barang->lokasi }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
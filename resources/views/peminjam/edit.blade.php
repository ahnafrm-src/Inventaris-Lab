@extends('default')

@section('title', 'Edit Peminjam')

@section('content')
<div style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; border-radius: 0.5rem; padding: 1.5rem 2rem; margin: 10px auto; max-width: 672px;">
    <h2 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">Tambah Data</h2>
    <form action="{{ route('peminjam.update', $peminjams->id) }}" method="POST">
        @csrf
        @method("PUT")
         <div class="mb-4">
            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control" value="{{ $peminjams->nama_peminjam }}">
        </div>
        <div class="mb-4">
            <label for="tipe_peminjam" class="form-label">Tipe Peminjam</label>
            <select name="tipe_peminjam" id="kondisi" class="form-select">
                <option value="siswa">Siswa</option>
                <option value="guru">Guru</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="jumlah" class="form-label">kontak</label>
            <input type="text" name="kontak" class="form-control" value="{{ $peminjams->kontak }}">
        </div>
        <div class="mb-4">
            <label for="lokasi" class="form-label">kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $peminjams->kelas }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
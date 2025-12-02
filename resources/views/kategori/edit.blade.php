@extends('default')

@section('title', 'Edit Kategori')

@section('content')
<div style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; border-radius: 0.5rem; padding: 1.5rem 2rem; margin: 10px auto; max-width: 672px;">
    <h2 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">Tambah Data</h2>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-4">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ $kategori->kategori }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
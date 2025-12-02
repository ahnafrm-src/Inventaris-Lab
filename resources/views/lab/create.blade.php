@extends('default')

@section('title', 'Tambah Lab')

@section('content')
<div style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; border-radius: 0.5rem; padding: 1.5rem 2rem; margin: 10px auto; max-width: 672px;">
    <h2 style="font-size: 1.5rem; font-weight: 500; margin-bottom: 1rem;">Tambah Data</h2>
    <form action="{{ route('labs.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_barang" class="form-label">Labs</label>
            <input type="text" name="nama_lab" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
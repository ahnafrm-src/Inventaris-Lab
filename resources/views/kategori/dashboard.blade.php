@extends('default')

@section('title', 'dashboard kategori')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>Kategori</h2>
        </div>

        <div class="barang-content">
            <a href="{{ route('kategoris.create') }}" class="tambah-data">Tambah Kategori</a>
            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif
            <div class="table-wrapper">
                <table class="barang-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Nama barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $ktgr)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ktgr->kategori }}</td>
                                <td>
                                    @if ($ktgr->barangs->isNotEmpty())
                                        @foreach ($ktgr->barangs as $barang)
                                            - {{ $barang->nama_barang }}
                                            <br>
                                        @endforeach
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('kategoris.edit', $ktgr->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('kategori.destroy', $ktgr->id) }}" method="post"
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

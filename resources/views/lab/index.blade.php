@extends('default')

@section('title', 'Lab')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>Lab</h2>
        </div>

        <div class="barang-content">
            <a href="{{ route('labs.create') }}" class="tambah-data">Tambah Lab</a>
            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif
            <div class="table-wrapper">
                <table class="barang-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lab</th>
                            <th>Nama barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($labs as $lab)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('labs.show', $lab->id) }}" style="text-decoration:none;color:#1E90FF">{{ $lab->nama_lab }}</a></td>
                                <td>
                                    @if ($lab->barangs->isNotEmpty())
                                        @foreach ($lab->barangs as $barang)
                                            - {{ $barang->nama_barang }}
                                            <br>
                                        @endforeach
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('labs.edit', $lab->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('labs.destroy', $lab->id) }}" method="post"
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

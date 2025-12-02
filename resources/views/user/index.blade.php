@extends('default')

@section('title', 'Data User')
@section('css', '/css/barang.css')

@section('content')
    <div class="barang-container">
        <div class="barang-header">
            <h2>Dashboard User</h2>
        </div>

        <div class="barang-content">
            <a href="{{ route('user.create') }}" class="tambah-data">Tambah User baru</a>
            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif
            <div class="table-wrapper">
                <table class="barang-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post"
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

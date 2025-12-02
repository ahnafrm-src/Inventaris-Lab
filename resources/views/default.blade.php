<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="icon" href="/img/logo_smk_11_malang.jpeg" type="image/x-icon">
</head>

<body style="background: #d8d8d8">
    <nav class="navbar navbar-expand-lg navbar-dark" style=" background: #777C6D">
        <div class="container-fluid">
            <img src="/img/logo_smk_11_malang.jpeg" class="rounded float-start"
                style="width: 50px;
                height: auto;
                margin-right: 10px;">
            <a class="navbar-brand" href="{{ route('home') }}">Inventaris Lab</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (session('user_id'))
                        @if (session('user_role') == 'admin')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}"
                                    href="{{ route('user.index') }}">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('kategoris.*') ? 'active' : '' }}"
                                    href="{{ route('kategoris.dashboard') }}">Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('barangs.*') ? 'active' : '' }}"
                                    href="{{ route('barangs.dashboard') }}">Barang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('peminjams.*') ? 'active' : '' }}"
                                    href="{{ route('peminjams.dashboard') }}">Peminjam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('peminjaman.*') ? 'active' : '' }}"
                                    href="{{ route('peminjaman.index') }}">Peminjaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('labs.*') ? 'active' : '' }}"
                                    href="{{ route('labs.index') }}">Labs</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}"
                                    href="{{ route('kategori.index') }}">Kategori</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('peminjam.*') ? 'active' : '' }}"
                                    href="{{ route('peminjam.index') }}">Peminjam</a>
                            </li> --}}
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                                href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div
        style="width: 100%; max-width: none; margin-left: auto; margin-right: auto; padding-left: 0; padding-right: 0;">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

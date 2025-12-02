<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LabController;

// halaman login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('home');
})->name('home');



Route::middleware(['auth.custom'])->group(function () {
    Route::get('/coba', function () {
        return view('coba');
    });
    
    Route::resource('user', UserController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource("peminjam", PeminjamController::class);
    Route::resource("peminjaman", PeminjamanController::class);
    Route::resource('labs', LabController::class);

    //admin
    Route::get('/peminjams/dashboard', [PeminjamController::class, 'dashboard'])->name('peminjams.dashboard');
    Route::get('/peminjams/create', [PeminjamController::class, 'dashboard'])->name('peminjams.create');
    Route::get('/kategoris/dashboard', [KategoriController::class, 'dashboard'])->name('kategoris.dashboard');
    Route::get('/kategoris/create', [KategoriController::class, 'create'])->name('kategoris.create');
    Route::get('/kategoris/{id}/edit', [KategoriController::class, 'edit'])->name('kategoris.edit');


    Route::get('/barangs/dashboard', [BarangController::class, 'dashboard'])->name('barangs.dashboard');
});

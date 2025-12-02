<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    //
    protected $fillable = ["nama_peminjam", "kelas", "kontak", "tipe_peminjam"];

    public function peminjamans(){
        return $this->hasMany(Peminjaman::class, "peminjam_id");
    }
}

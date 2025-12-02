<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = "peminjamans";
    protected $fillable = ["barang_id", "peminjam_id", "status", "tanggal_dikembalikan"];

    public function barangs(){
        return $this->belongsTo(barang::class, "barang_id");
    }

    public function peminjams(){
        return $this->belongsTo(Peminjam::class, "peminjam_id");
    }
}

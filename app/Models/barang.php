<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
    protected $table = 'barangs';
    protected $fillable = ['nama_barang', 'kategori_id','jumlah', 'kondisi', 'lab_id'];

    public function kategoris(){
        return $this->belongsTo(kategori::class, 'kategori_id');
    }

    public function peminjamans(){
        return $this->hasMany(Peminjaman::class, "barang_id");
    }

    public function lab(){
        return $this->belongsTo(Lab::class, 'lab_id');
    }
}

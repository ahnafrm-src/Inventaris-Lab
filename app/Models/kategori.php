<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $table = "kategories";
    protected $fillable = ['kategori'];

    public function barangs(){
        return $this->hasMany(barang::class, 'kategori_id');
    }
}

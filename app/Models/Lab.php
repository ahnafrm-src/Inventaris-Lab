<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    //
    protected $table = 'labs';
    protected $fillable = ['nama_lab'];

    public function barangs(){
        return $this->hasMany(Barang::class, 'lab_id');
    }
}

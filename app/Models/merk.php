<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
      use HasFactory;
    protected $filLable = ['id', 'nama_merk'];
    public $timestamps = true;

     //relasi ke table produk
    public function produk()
    {
        return $this->hasMany(produk::class);
    }

}

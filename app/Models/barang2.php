<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang2 extends Model
{
    use HasFactory;
     protected $filLable = ['id', 'nama_barang','harga','stok'];
    public $timestamps = true;

     //relasi ke table produk
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }

}

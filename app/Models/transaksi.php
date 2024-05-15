<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

      protected $filLable = ['id', 'id_barang', 'id_pembeli','jumlah','tanggal'];
    public $timestamps = true;
        public function barang2()
    {
        return $this->belongsTo(barang2::class, 'id_barang');
    }
     public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli');
    }
}

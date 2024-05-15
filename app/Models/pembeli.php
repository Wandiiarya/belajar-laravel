<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
     use HasFactory;
     protected $filLable = ['id', 'nama_pembeli','jenis_kelamin'];
    public $timestamps = true;

     //relasi ke table transaksi
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }

}

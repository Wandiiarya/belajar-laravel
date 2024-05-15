<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $filLable = ['id', 'nama_produk', 'jumlah', 'tanggal_produksi', 'id_merk'];
    public $timestamps = true;

    public function merk()
    {
        return $this->belongsTo(merk::class, 'id_merk');
    }
}

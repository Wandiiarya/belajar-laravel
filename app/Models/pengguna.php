<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $filLable = ['id', 'nama'];
    public $timestamps = true;

    //relasi ke table telepon
    public function telepon()
    {
        return $this->hasOne(telepon::class);
    }
}

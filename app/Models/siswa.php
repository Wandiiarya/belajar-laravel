<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
     protected $filLable = ['id', 'nama', 'jenis_kelamin','alamat','agama','telepon','email'];
    public $timestamps = true;
}

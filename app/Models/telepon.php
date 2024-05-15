<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    use HasFactory;
    protected $filLable = ['id', 'no_telepon', 'penggunas_id'];
    public $timestamps = true;

    public function pengguna()
    {
        return $this->belongsTo(pengguna::class, 'pengguna_id');
    }
}

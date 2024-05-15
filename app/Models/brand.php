<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
     protected $filLable = ['id', 'name_brand'];
    public $timestamps = true;

    use HasFactory;
}

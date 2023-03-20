<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wahana extends Model
{
    use HasFactory;

    protected $fillable = ["nama", "deskripsi", "kuota", "status"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_depan",
        "nama_belakang",
        "email",
        "tanggal",
        "testimoni_text",
        "rating",
      ];

      public function getCreatedAtAttribute($date)
      {
        return Carbon::createFromFormat("Y-m-d H:i:s", $date)->format(
          "D, d F Y"
        );
      }

      public function getUpdatedAtAttribute($date)
      {
        return Carbon::createFromFormat("Y-m-d H:i:s", $date)->format(
          "D, d F Y"
        );
      }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promo extends Model
{
  use HasFactory;

  protected $table = 'promo';

  protected $fillable = [
    "nama",
    "deskripsi",
    "tanggal_mulai",
    "tanggal_selesai",
    "kode_promo",
    "status",
    "potongan",
    "kuota_promo",
    "terpakai_promo",
  ];

  protected $dates = [
    'tanggal_mulai',
    'tanggal_selesai',
    'created_at',
    'updated_at',
  ];

  protected $casts = [
      'kuota_promo' => 'integer',
      'terpakai_promo' => 'integer',
  ];

  public function getStatusAttribute()
  {
    $tanggalSelesai = \Carbon\Carbon::createFromFormat('Y-m-d', $this->tanggal_selesai);

    // Cek apakah tanggal_selesai sudah melewati tanggal saat ini
    if ($tanggalSelesai->lessThan(\Carbon\Carbon::now()) || $this->terpakai_promo >= $this->kuota_promo) {
        return 'Tidak Aktif';
    } else {
        return 'Aktif';
    }
  }

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

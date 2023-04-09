<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "wahana_id",
        "ticket_id",
        "date",
        "qty",
        "status",
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

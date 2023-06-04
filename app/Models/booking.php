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
        "ticket_id",
        "date",
        "qty",
        "bukti_pembayaran",
        "status",
        "discount", // tambahkan kolom discount ke dalam fillable
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

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model Ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }

    // Accessor untuk mendapatkan total harga setelah diskon
    public function getTotalPriceAttribute()
    {
        $totalPrice = $this->qty * $this->ticket->harga;
        
        if ($this->discount) {
            $totalPrice -= $totalPrice * ($this->discount / 100);
        }
        
        return $totalPrice;
    }
}

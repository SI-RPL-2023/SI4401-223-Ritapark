<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $table = 'refund';

    protected $fillable = [
        'ticket_id',
        'user_id',
        'booking_id',
        'nama_tiket',
        'refund_reason',
        'user_name',
        'user_email',
        'is_confirmed',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\Booking;

class BookingController extends Controller
{
  public function index()
  {
    $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.ticket_id')
      ->join('users', 'bookings.user_id', '=', 'users.id')
      ->select(
        'bookings.id',
        'users.name',
        'bookings.date',
        'tickets.nama',
        'tickets.harga',
        'tickets.deskripsi',
        'bookings.qty',
        'bookings.status'
      )
      ->get();
    return view('admin.booking.index', compact('data'));
  }
}

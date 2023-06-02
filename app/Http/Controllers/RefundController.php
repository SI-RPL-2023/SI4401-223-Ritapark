<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Ticket;
use App\Models\Booking;
use App\Models\User;

class RefundController extends Controller
{
    public function refundForm()
    {
        // Ambil data user dari database
        $user = User::findOrFail(auth()->user()->id);
        $idnya = $user->id;

        // Ambil data tiket yang dapat di-refund dari database
        
        $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
            ->where('bookings.user_id', $idnya)
            ->get();
        $tickets = Ticket::all();

        
        
        return view('refund', compact('user', 'tickets', 'data'));
    }

    public function refundSubmit(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tiket' => 'required',
            'alasan' => 'required',
        ]);

        
        // Ambil data user dari database
        $user = User::findOrFail(auth()->user()->id);
        $idnya = $user->id;
        $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
            ->where('bookings.user_id', $idnya)
            ->first();

        // Ambil data tiket yang dipilih dari database
        $ticket = Ticket::findOrFail($request->input('tiket'));

        // Simpan data refund ke dalam database
        $refund = new Refund();
        $refund->booking_id = $request->input('tiket');
        $refund->ticket_id = $ticket -> id;
        $refund->nama_tiket = $ticket->nama;
        $refund->alasan = $request->input('alasan');
        $refund->nama_user = $user->name;
        $refund->user_id = $user->id;
        $refund->email_user = $request->input('email');
        $refund->save();

        return redirect()->back()->with('success', 'Permintaan refund tiket telah berhasil diajukan.');
    }

    public function adminConfirmation()
    {
        // Ambil data refund yang belum dikonfirmasi oleh admin
        $refunds = Refund::all()->get();

       
        
        return view('admin.refundConfirmation', compact('refunds'));
    }

    public function confirmRefund(Request $request, $refundId)
    {
        // Validasi input
        $request->validate([
            'booking_id' => 'required',
        ]);

        // Ambil data refund dari database
        $refund = Refund::findOrFail($refundId);

        // Ambil data booking yang akan dihapus dari database
        $booking = Booking::findOrFail($request->input('booking_id'));

        // Hapus data booking dari database
        $booking->delete();

        // Update data refund dengan booking_id yang sudah dikonfirmasi
        $refund->booking_id = $request->input('booking_id');
        $refund->save();

        return redirect()->back()->with('success', 'Refund tiket telah berhasil dikonfirmasi.');
    }
}
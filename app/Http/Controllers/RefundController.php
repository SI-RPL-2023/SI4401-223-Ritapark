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
            ->select(
                'bookings.*',
                'tickets.nama',
            )
            ->get();
        $tickets = Ticket::all();
        
        $bookingID = Booking::where('user_id', $idnya);
        
        return view('refund', compact('user', 'tickets', 'data'));
    }

    public function refundSubmit(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'booking_id' => 'required',
            'alasan' => 'required',
            'rekening' => 'required',
            'metode' => 'required',
            'namarekening' => 'required',
        ]);

        $selectedValue = explode(',', $request->input('booking_id'));

        $booking_id = $selectedValue[0];
        $namatiket = $selectedValue[1];

        
        // Ambil data user dari database
        $user = User::find(auth()->user()->id);
        $idnya = $user->id;
        $data = Booking::where('id', $booking_id)->get()->first();
        

        // Ambil data tiket yang dipilih dari database
        
        $existingRefund = Refund::where('booking_id', $booking_id)->first();
        if (!$existingRefund) {
            $refund = new Refund();
            $refund->booking_id = $booking_id;
            $refund->nama_tiket = $namatiket;
            $refund->alasan = $request->input('alasan');
            $refund->rekening = $request->input('rekening');
            $refund->metode = $request->input('metode');
            $refund->nama_rekening = $request->input('namarekening');
            $refund->nama_user = $user->name;
            $refund->user_id = $user->id;
            $refund->email_user = $request->input('email');
            $refund->save();
            if ($refund->save()) {
                $data->status = 3;
                $data->save();
                return redirect()->back()->with('success', 'Permintaan refund tiket telah berhasil diajukan.');
            } else {
                return redirect()->back()->with('error', 'Permintaan refund gagal. Mohon refresh halaman');
            }
        } elseif ($existingRefund && $existingRefund->is_confirmed == 2) {
            $refund = new Refund();
            $refund->booking_id = $booking_id;
            $refund->nama_tiket = $namatiket;
            $refund->alasan = $request->input('alasan');
            $refund->rekening = $request->input('rekening');
            $refund->metode = $request->input('metode');
            $refund->nama_rekening = $request->input('namarekening');
            $refund->nama_user = $user->name;
            $refund->user_id = $user->id;
            $refund->email_user = $request->input('email');
            $refund->save();
            if ($refund->save()) {
                $data->status = 3;
                $data->save();
                return redirect()->back()->with('success', 'Permintaan refund tiket telah berhasil diajukan.');
            } else {
                return redirect()->back()->with('error', 'Permintaan refund gagal. Mohon refresh halaman');
            }
        } else {
            return redirect()->back()->with('error', 'Data Refund Telah ada'); 
        }
    }

    public function adminConfirmation()
    {
        // Ambil data refund yang belum dikonfirmasi oleh admin
        $refunds = Refund::all();
        
        return view('admin.refundConfirmation', compact('refunds'));
    }

    public function confirmRefund(Request $request, $refundId)
    {
        // Validasi input
        $request->validate([
            'booking_id' => 'required',
        ]);

        // Ambil data refund dari database
        $refund = Refund::where('id', $refundId)->where('is_confirmed', '0')->first();

        // Ambil data booking yang akan dihapus dari database
        $booking = Booking::find($request->input('booking_id'));

        // Hapus data booking dari database
        $booking->status = 4;
        $booking->save();

        // Update data refund dengan booking_id yang sudah dikonfirmasi
        $refund->is_confirmed = 1;
        $refund->save();

        return redirect()->back()->with('success', 'Refund tiket telah berhasil dikonfirmasi.');
    }

    public function tolakRefund(Request $request, $refundId)
    {
        // Validasi input
        $request->validate([
            'booking_id' => 'required',
        ]);

        // Ambil data refund dari database
        $refund = Refund::findOrFail($refundId);

        // Ambil data booking yang akan dihapus dari database
        $booking = Booking::find($request->input('booking_id'));

        // Hapus data booking dari database
        $booking->status = 5;
        $booking->save();

        // Update data refund dengan booking_id yang sudah dikonfirmasi
        $refund->is_confirmed = 2;
        $refund->save();

        return redirect()->back()->with('warning', 'Refund tiket telah berhasil ditolak.');
    }
}
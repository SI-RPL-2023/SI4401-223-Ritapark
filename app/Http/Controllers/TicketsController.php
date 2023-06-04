<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TicketsController extends Controller
{
    public function my_ticket()
    {
        if (Auth::user()) {
            $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
                ->where('user_id', Auth::user()->id)
                ->select(
                    'bookings.id',
                    'tickets.nama',
                    'tickets.harga',
                    'tickets.deskripsi',
                    'bookings.status',
                    'bookings.qty'
                )
                ->get();
            return view('my_ticket', compact('data'));
        } else {
            return redirect()->route('home');
        }
    }

    public function booking()
    {
        $data = Ticket::all();
        return view('booking', compact('data'));
    }

    public function booking_store(Request $request)
    {
        // Validasi
        $request->validate([
            'date' =>  'required',
            'qty' => 'required'
        ]);
        $tiket = Ticket::find($request->ticket_id);

        $data = Booking::insertGetId([
            'tickets_id' => $request->ticket_id, 'user_id' => Auth::user()->id,
            'qty' => $request->qty, 'date' => $request->date, 'status' => 0,
            'total' => $request->qty * $tiket->harga,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        return redirect()->route('payment', $data);
    }

    public function payment($id)
    {
        $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
            ->where('bookings.id', $id)
            ->first();
        if ($data->status == 0) {
            return view('payment', compact('data', 'id'));
        } else {
            return redirect()->route('home');
        }
    }

    public function payment2($id)
    {

        $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
            ->where('bookings.id', $id)
            ->first();

        if ($data->status == 0) {
            return view('payment2', compact('data', 'id'));
        } else {
            return redirect()->route('home');
        }
    }

    public function payment_confirmation(Request $request)
    {
        // Memvalidasi request
        $request->validate([
            'customFile' => 'required|image|max:2048', // Hanya menerima file gambar dengan ukuran maksimal 2 MB
            'id' => 'required|exists:bookings,id', // Memastikan bahwa id yang dimasukkan ada di database
        ]);

        // Mendapatkan file yang diupload
        $file = $request->file('customFile');

        // Menyimpan file ke dalam direktori "storage/app/public"
        $path = $file->store('public');

        // Mendapatkan URL dari file yang telah diupload
        $url = Storage::url($path);

        // Mendapatkan data booking yang akan diupdate
        $booking = Booking::find($request->input('id'));

        // Menyimpan URL bukti pembayaran ke dalam kolom "bukti_pembayaran" pada tabel booking
        $booking->bukti_pembayaran = $url;
        $booking->update();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('ticket', $request->id)->with('success', 'Bukti pembayaran berhasil diunggah.');
    }

    public function booking_confirmation(Request $request)
    {
        $data = Booking::find($request->id);
        $data->status = 1;
        $data->save();

        return redirect()->route('ticket', $request->id);
    }

    public function ticket($id)
    {
        $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
            ->where('bookings.id', $id)
            ->first();
        if ($data->status == 1) {
            return view('ticket', compact('data'));
        } else {
            return redirect()->route('home');
        }
    }
}

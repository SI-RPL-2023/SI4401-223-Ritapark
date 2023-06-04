<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Promo;
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
                    'bookings.total_harga',
                    'bookings.kode_promo',
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

        // Nambah buat ngambil harga Tiket
        $harga = Ticket::where('id', $request->ticket_id);
        $getTiket = $harga->first();
        $harga = $getTiket->harga;
        $totalHarga = ($harga) * $request->qty;

        $data = Booking::insertGetId([
            'tickets_id' => $request->ticket_id, 'user_id' => Auth::user()->id,
            'qty' => $request->qty, 'date' => $request->date, 'status' => 2,
            'total_harga' => $totalHarga,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        
        $id = Booking::where('id', $data)->get();
        $promos = Promo::where('status', 'Aktif')->get();

        return redirect()->route('payment', $data)->with(compact('id', 'promos'));
    }

    public function payment($id)
    {
        $data = Booking::join('tickets', 'tickets.id', '=', 'bookings.tickets_id')
            ->where('bookings.id', $id)
            ->first();
        
        //Nambah cek kalau status 2
        if ($data->status == 2) {
            $dataPromo = Promo::where('status', 'Aktif')->get();
            $promos = $dataPromo -> first();
            return view('payment', compact('data', 'id', 'promos')); 
        } else {
            return redirect()->route('home');
        }
    } 

    public function payment2(Request $request, $id)
    {
        $data = Booking::find($request->id);
        $tes = $data->total_harga;
        
        $promos = Promo::where('kode_promo', $request->promo_code)->get();
        $dataPromos = $promos->first();
        
        // dd($request, $promos, $dataPromos -> potongan, $request->promo_code, $data->total_harga);  
        if ($request->promo_code !== null && $dataPromos->kode_promo == $request->promo_code) {
            $totalHarga = (($data->total_harga) - ($data->total_harga * $dataPromos -> potongan / 100));
            $data->total_harga = $totalHarga;
            $data->kode_promo = $request->promo_code;
            
            $data->discount = $dataPromos->potongan;
            $dataPromos->terpakai_promo += 1;
            $data->status = 2;
            $data->save();
            $dataPromos->save();
        } else {
            $data->status = 2;
            $data->save();
        }
        $data->status = 2;
        $data->metode = $request->payment;
        $data->save();

        if ($data->status == 0 || $data->status == 2) {
            return view('payment2', compact('data', 'id'));
        } else {
            return redirect()->route('home');
        }
    }

    public function tiketBayar($id)
    {
        $data = Booking::find($id);
        $tiket = Ticket::find($data->tickets_id);
        $dataPromo = Promo::where('status', 'Aktif')->get();
        $promos = $dataPromo -> first();
        
        
        if ($data->status == 2 && $data->metode != NULL) {
            return view('payment2', compact('data', 'id'));
        } elseif  ($data->status == 2 && $data->metode == NULL){
            
            return view('payment', compact('data', 'id', 'promos', 'tiket'));
        } else {
            return redirect()->route('home');
        }
    }

    public function payment_confirmation(Request $request)
    {
        // Memvalidasi request
        $request->validate([
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
        $booking->status = 0;
        $booking->update();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('my_ticket')->with('success', 'Bukti pembayaran berhasil diunggah.');
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

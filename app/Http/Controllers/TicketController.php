<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function my_ticket()
    {
        if(Auth::user()){
            $data = Booking::join('tickets','tickets.id','=','bookings.ticket_id')
            ->where('user_id',Auth::user()->id)
            ->select('bookings.id','tickets.nama','tickets.harga','tickets.deskripsi'
            ,'bookings.qty')
            ->where('status',1)
            ->get();
            return view('my_ticket',compact('data'));
        }else{
            return redirect()->route('home');
        }
    }

    public function booking()
    {
        $data = Ticket::all();
        return view('booking',compact('data'));
    }

    public function booking_store(Request $request)
    {
        // Validasi
        $request->validate([
            'date' =>  'required',
            'qty' => 'required'
        ]);

        $data = Booking::insertGetId(['ticket_id' => $request->ticket_id,'user_id' => Auth::user()->id,
                        'qty' => $request->qty,'date' => $request->date,'status' => 0,
                        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]);
        return redirect()->route('payment',$data);
    }

    public function payment($id)
    {
        $data = Booking::join('tickets','tickets.id','=','bookings.ticket_id')
        ->where('bookings.id',$id)
        ->first();
        if($data->status == 0){
            return view('payment',compact('data','id'));
        }else{
            return redirect()->route('home');
        }
    }

    public function booking_confirmation(Request $request)
    {
        $data = Booking::find($request->id);
        $data->status = 1;
        $data->save();
        
        return redirect()->route('ticket',$request->id);
    }

    public function ticket($id)
    {
        $data = Booking::join('tickets','tickets.id','=','bookings.ticket_id')
        ->where('bookings.id',$id)
        ->first();
        if($data->status == 1){
            return view('ticket',compact('data'));
        }else{
            return redirect()->route('home');
        }
    }
}

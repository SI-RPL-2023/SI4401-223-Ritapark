<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function wahana()
    {
        return view('wahana');
    }
    
    public function promo()
    {
        return view('promo');
    }

    public function contact()
    {
        return view('contact');
    }
}

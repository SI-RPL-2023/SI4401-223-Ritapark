<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::latest()->take(3)->get();
        return view('home', compact('testimonis'));
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

    public function testimoni()
    {
        return view('testimoni');
    }
}

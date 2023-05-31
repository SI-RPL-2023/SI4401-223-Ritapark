<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Testimoni;
// use Charts;

class DashboardController extends Controller
{
    public function index()
    {
        $tickets = Ticket::count();
        $total = Ticket::sum('harga');
        $maxRating = 5.0;
        $rating = Testimoni::where('rating', '<=', $maxRating)->count();
        return view('admin.dashboard', compact('tickets', 'total', 'rating'));
    }
}

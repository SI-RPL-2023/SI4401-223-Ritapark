<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Testimoni;
use App\Models\Booking;
use Akaunting\Apexcharts\Chart;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $tickets = Ticket::count();
        $periode = $request->query('periode', 'bulan_ini');
        $reports = $this->pendapatan($periode);
        $maxRating = 5.0;
        $rating = Testimoni::where('rating', '<=', $maxRating)->count();

        return view('admin.dashboard', compact('tickets', 'periode', 'rating', 'reports'));
    }

    public function pendapatan($periode)
    {
        $data = new \stdClass();

        if ($periode === 'bulan_lalu') {
            $data->pendapatan = Booking::whereMonth('created_at', '=', now()->subMonth()->month)->sum('total');
        } else {
            $data->pendapatan = Booking::whereMonth('created_at', '=', now()->month)->sum('total');
        }

        return $data;
    }
}

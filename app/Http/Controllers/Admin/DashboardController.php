<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Testimoni;
use App\Models\Booking;
use Akaunting\Apexcharts\Chart;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function RolesView()
    {
        $users = User::all();
        return view('admin.RoleManagement', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'Role updated successfully');
    }
    
    public function hapus($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }
}

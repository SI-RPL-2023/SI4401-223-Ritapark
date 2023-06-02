<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

class PromoController extends Controller
{
    /**
     * Display a listing of the promos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $promos = Promo::all();

        return view('admin.promo.index', compact('promos'));
    }

    public function halamanPromo()
    {
        $promos = Promo::all();
        
        return view('promo', compact('promos'));
    }

    /**
     * Show the form for creating a new promo.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.promo.create');
    }

    /**
     * Store a newly created promo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => [
                'required',
                'date',
                'after_or_equal:tanggal_mulai',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value < $request->input('tanggal_mulai')) {
                        Session::flash('error', 'Tanggal selesai harus setelah tanggal mulai.');
                    }
                },
            ],
            'kode_promo' => 'required',
            'potongan' => 'required',
            'kuota_promo' => 'required|integer',
        ]);

        $tanggalMulai = $request->input('tanggal_mulai');
        $tanggalSelesai = $request->input('tanggal_selesai');

        if ($tanggalMulai >= $tanggalSelesai) {
            return redirect()->route('admin.promo.create')->with(['tanggal_selesai' => 'Tanggal selesai harus setelah tanggal mulai.']);
        }

        Promo::create($validatedData);

        return redirect()->route('adm.promo.index')->with('success', 'Promo created successfully.');
    }

    /**
     * Show the form for editing the specified promo.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\View\View
     */
    public function edit(Promo $promo)
    {
        return view('admin.promo.edit', compact('promo'));
    }

    /**
     * Update the specified promo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Promo $promo)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => [
                'required',
                'date',
                'after_or_equal:tanggal_mulai',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value < $request->input('tanggal_mulai')) {
                        Session::flash('error', 'Tanggal selesai harus setelah tanggal mulai.');
                    }
                },
            ],
            'kode_promo' => 'required',
            'potongan' => 'required',
            'kuota_promo' => 'required|integer',
        ]);

        Session::flash('error', 'Tanggal selesai harus setelah tanggal mulai.');
        $promo->update($validatedData);

        return redirect()->route('adm.promo.index')->with('success', 'Promo updated successfully.');
    }

    /**
     * Remove the specified promo from storage.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Promo $promo)
    {
        $promo->delete();

        return redirect()->route('adm.promo.index')->with('success', 'Promo deleted successfully.');
    }
}

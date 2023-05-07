<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'nama_depan'=>'required|string',
            'email'=>'required|string',
            'tanggal'=>'required|date',
            'testimoni_text'=>'required|string',
            'rating'=>'required|string',
        ]);

        Testimoni::create([
            'nama_depan'=>$request->nama_depan,
            'nama_belakang'=>$request->nama_belakang,
            'email'=>$request->email,
            'tanggal'=>$request->tanggal,
            'testimoni_text'=>$request->testimoni_text,
            'rating'=>$request->rating,
        ]);

        return redirect()->route('testimoni')->with('success', 'Testimoni Berhasil Terkirim!');
    }
}

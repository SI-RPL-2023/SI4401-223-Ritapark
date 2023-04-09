<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wahana;

class WahanaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = Wahana::all();
    return view('admin.wahana.index', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.wahana.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // Validasi
    $request->validate([
      'nama' =>  'required',
      'deskripsi' => 'required',
      'kuota' => 'required',
      'status' => 'required',
    ]);

    $data = new Wahana();
    $data->nama = $request->nama;
    $data->deskripsi = $request->deskripsi;
    $data->kuota = $request->kuota;
    $data->status = $request->status;
    $data->save();

    return redirect()->route('adm.wahana.index')
      ->with('success', 'wahana Berhasil Dibuat');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = Wahana::find($id);
    return view('admin.wahana.edit', compact('data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // Validasi
    $request->validate([
      'nama' =>  'required',
      'deskripsi' => 'required',
      'kuota' => 'required',
      'status' => 'required',
    ]);

    $data = new Wahana();
    $data->nama = $request->nama;
    $data->deskripsi = $request->deskripsi;
    $data->kuota = $request->kuota;
    $data->status = $request->status;
    $data->save();

    return redirect()->route('adm.wahana.index')
      ->with('success', 'wahana Berhasil Diubah');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $data = Wahana::find($id);
    $data->delete();
    return redirect()->route('adm.wahana.index')
      ->with('success', 'wahana Berhasil Dihapus');
  }
}

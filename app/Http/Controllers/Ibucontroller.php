<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function dataibu()
    {
       $ibus = Ibu::all();
        return view('dataibu')->with('ibus',$ibus);
    }
    public function store2(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'alamat' => 'required',
        'status' => 'required',
        'no_kk' => 'required',
        'no_bpjs' => 'required',
        'no_hp' => 'required',
        'keterangan' => 'required',
    ]);

    // Simpan data anak ke database
    Ibu::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
}

}
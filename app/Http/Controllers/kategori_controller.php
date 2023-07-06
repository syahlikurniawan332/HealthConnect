<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategori_controller extends Controller
{
    public function kategori()
    {
       $kategoris = kategori::all();
        return view('tokokesehatan')->with('kategoris',$kategoris);
    }
    public function store1(Request $request)
    {
    $validatedData = $request->validate([
        'nama_kat' => 'required',
        'image' => 'required|image|max:2048',
    ]);

    // Simpan data anak ke database
    kategori::create($validatedData);

    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data kategori berhasil disimpan.');
}
}
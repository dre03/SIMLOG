<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $result = Kategori::all();

        return view('logistik.kategori', ['kategori' => $result]);
    }

    public function store(Request $request){

        $dataInput = $request->validate([
            'nama_kategori' => 'required',
            'status_kategori' => 'required',
        ]) ;

        $kategori = kategori::create($dataInput);
        
        if($kategori){
            return redirect('/kategori');
        }
    }

    public function edit(Request $request, $id)
    {
      // Validasi data input
        $request->validate([
            'nama_kategori' => 'required',
            'status_kategori' => 'required',
        ]);

        // Update data kategori
        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->status_kategori = $request->status_kategori;
        $kategori->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data kategori berhasil diupdate.');
    }

    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->back()->with('success', 'Data produsen berhasil dihapus.');
    }
}

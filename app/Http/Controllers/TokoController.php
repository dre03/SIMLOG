<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function index()
    {
        $result = Toko::all();

        return view('logistik.toko', ['toko' => $result]);
    }

    public function store(Request $request){

        $dataInput = $request->validate([
            'nama_toko' => 'required',
            'no_telp_toko' => 'required',
            'alamat_toko' => 'required',
            'status_toko' => 'required',
        ]) ;

        $toko = Toko::create($dataInput);
        
        if($toko){
            return redirect('/toko');
        }
    }

    public function edit(Request $request, $id)
    {
      // Validasi data input
        $request->validate([
            'nama_toko' => 'required',
            'no_telp_toko' => 'required',
            'alamat_toko' => 'required',
            'status_toko' => 'required',
        ]);

        // Update data toko
        $toko = Toko::findOrFail($id);
        $toko->nama_toko = $request->nama_toko;
        $toko->no_telp_toko = $request->no_telp_toko;
        $toko->alamat_toko = $request->alamat_toko;
        $toko->status_toko = $request->status_toko;
        $toko->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data toko berhasil diupdate.');
    }

    public function destroy($id)
    {
        $toko = Toko::findOrFail($id);
        $toko->delete();

        return redirect()->back()->with('success', 'Data toko berhasil dihapus.');
    }
}

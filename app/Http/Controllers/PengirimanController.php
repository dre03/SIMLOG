<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;


class PengirimanController extends Controller
{
 public function index()
    {
        $result = Pengiriman::all();

        return view('logistik.pengiriman', ['pengiriman' => $result]);
    }

    public function store(Request $request){

        $dataInput = $request->validate([
            'id_distributor'       => 'required',
                'id_produk'       => 'required',
                'tanggal_pengiriman'       => 'required',
                'jumlah_produk_pengiriman'  => 'required',
                'kode_pengiriman'       => 'required',
                'harga_pengiriman'      => 'required|numeric',
                'status_pengiriman'     => 'required|numeric',
        ]) ;

        $pengiriman = Pengiriman::create($dataInput);
        
        if($pengiriman){
            return redirect('/pengiriman');
        }
    }

    public function edit(Request $request, $id)
    {
      // Validasi data input
        $request->validate([
             'id_distributor'       => 'required',
                'id_produk'       => 'required',
                'tanggal_pengiriman'       => 'required',
                'jumlah_produk_pengiriman'  => 'required',
                'kode_pengiriman'       => 'required',
                'harga_pengiriman'      => 'required|numeric',
                'status_pengiriman'     => 'required|numeric',
        ]);

        // Update data pengiriman
        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->id_distributor = $request->id_distributor;
        $pengiriman->id_produk = $request->id_produk;
        $pengiriman->tanggal_pengiriman = $request->tanggal_pengiriman;
        $pengiriman->jumlah_produk_pengiriman = $request->jumlah_produk_pengiriman;
        $pengiriman->kode_pengiriman = $request->kode_pengiriman;
        $pengiriman->status_pengiriman = $request->status_pengiriman;
        $pengiriman->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data pengiriman berhasil diupdate.');
    }

    public function destroy($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);
        $pengiriman->delete();

        return redirect()->back()->with('success', 'Data produsen berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;


class ProdukController extends Controller
{
     public function index()
    {
        $result = Produk::all();

        return view('logistik.produk', ['produk' => $result]);
    }

    public function store(Request $request){

        $dataInput = $request->validate([
            'id_produsen'       => 'required',
                'id_kategori'       => 'required',
                'nama_produk'       => 'required',
                'deskripsi_produk'  => 'required',
                'kode_produk'       => 'required',
                'harga_produk'      => 'required|numeric',
                'status_produk'     => 'required|numeric',
        ]) ;

        $produk = Produk::create($dataInput);
        
        if($produk){
            return redirect('/produk');
        }
    }

    public function edit(Request $request, $id)
    {
      // Validasi data input
        $request->validate([
             'id_produsen'       => 'required',
                'id_kategori'       => 'required',
                'nama_produk'       => 'required',
                'deskripsi_produk'  => 'required',
                'kode_produk'       => 'required',
                'harga_produk'      => 'required|numeric',
                'status_produk'     => 'required|numeric',
        ]);

        // Update data produk
        $produk = Produk::findOrFail($id);
        $produk->id_produsen = $request->id_produsen;
        $produk->id_kategori = $request->id_kategori;
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->kode_produk = $request->kode_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->status_produk = $request->status_produk;
        $produk->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data produk berhasil diupdate.');
    }

    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();

        return redirect()->back()->with('success', 'Data produsen berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdukResource;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index(){
        // get all produk

        $produks = Produk::latest()->paginate(5);

        return new ProdukResource(true, 'List Data Produk', $produks);
    }

    public function store(Request $request){
        //define validation rules
            $validator = Validator::make($request->all(), [
                'id_produsen'       => 'required',
                'id_kategori'       => 'required',
                'nama_produk'       => 'required',
                'deskripsi_produk'  => 'required',
                'kode_produk'       => 'required',
                'harga_produk'      => 'required|numeric',
                'satuan'            => 'required',
                'status_produk'     => 'required|numeric',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            //create post
            $produks = Produk::create([
                'id_produsen'       => $request->id_produsen,
                'id_kategori'       => $request->id_kategori,
                'nama_produk'       => $request->nama_produk,
                'deskripsi_produk'  => $request->deskripsi_produk,
                'kode_produk'       => $request->kode_produk,
                'harga_produk'      => $request->harga_produk,
                'satuan'            => $request->satuan,
                'status_produk'     => $request->status_produk,
            ]);

            //return response
            return new ProdukResource(true, 'Data Produk Berhasil Ditambahkan!', $produks);
    }

    public function show($id)
        {
            //find produk by ID
            $produks = Produk::find($id);
            //return single produk as a resource

            if (!$produks) {
                return new ProdukResource(false, 'Data Produk Tidak Ditemukan!', null);
            }
            return new ProdukResource(true, 'Detail Data Produk!', $produks);
    }

    public function update(Request $request, $id)
        {
            //define validation rules
            $validator = Validator::make($request->all(), [
                'id_produsen'       => 'required',
                'id_kategori'       => 'required',
                'nama_produk'       => 'required',
                'deskripsi_produk'  => 'required',
                'kode_produk'       => 'required',
                'harga_produk'      => 'required|numeric',
                'satuan'            => 'required',
                'status_produk'     => 'required|numeric',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            //find post by ID
            $produks = Produk::find($id);
                //update distributor
                $produks->update([
                    'id_produsen'       => $request->id_produsen,
                    'id_kategori'       => $request->id_kategori,
                    'nama_produk'       => $request->nama_produk,
                    'deskripsi_produk'  => $request->deskripsi_produk,
                    'kode_produk'       => $request->kode_produk,
                    'harga_produk'      => $request->harga_produk,
                    'satuan'            => $request->satuan,
                    'status_produk'     => $request->status_produk,
                ]);

            //return response
            return new ProdukResource(true, 'Data Produk Berhasil Diubah!', $produks);
        }
    
    public function destroy($id)
        {

            //find post by ID
            $produks = Produk::find($id);

            // Check if produsen exists
            if (!$produks) {
                return new ProdukResource(false, 'Data Produk Tidak Ditemukan!', null);
            }

            //delete produsen
            $produks->delete();

            //return response
            return new ProdukResource(true, 'Data Produk Berhasil Dihapus!', null);
        }


}

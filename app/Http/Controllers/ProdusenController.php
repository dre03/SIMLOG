<?php

namespace App\Http\Controllers;
use App\Models\Produsen;
use Illuminate\Http\Request;
use App\Http\Resources\ProdusenResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
class ProdusenController extends Controller
{
    public function index(): View
    {
        // get all produsen
        $produsens = Produsen::latest()->paginate(5);

        return view('produsen.index', compact('produsens'));

        // return new ProdusenResource(true, 'List Data Produsen', $produsens);
    }


    public function store(Request $request)
        {
            //define validation rules
            $validator = Validator::make($request->all(), [
                'nama_produsen'     => 'required',
                'no_telp_produsen'     => 'required|numeric',
                'alamat_produsen'   => 'required',
                'status_produsen'   => 'required|numeric',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            //create post
            $produsens = Produsen::create([
                'nama_produsen'     => $request->nama_produsen,
                'no_telp_produsen'   => $request->no_telp_produsen,
                'alamat_produsen'   => $request->alamat_produsen,
                'status_produsen'   => $request->status_produsen,
            ]);

            //return response
            return new ProdusenResource(true, 'Data Produsen Berhasil Ditambahkan!', $produsens);
        }

    public function show($id)
        {
            //find produsen by ID
            $produsens = Produsen::find($id);
            //return single produsen as a resource

            if (!$produsens) {
                return new ProdusenResource(false, 'Data Produsen Tidak Ditemukan!', null);
            }
            return new ProdusenResource(true, 'Detail Data Post!', $produsens);
        }

        public function update(Request $request, $id)
        {
            //define validation rules
            $validator = Validator::make($request->all(), [
                'nama_produsen'     => 'required',
                'no_telp_produsen'     => 'required|numeric',
                'alamat_produsen'   => 'required',
                'status_produsen'   => 'required|numeric',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            //find post by ID
            $produsens = Produsen::find($id);
                //update produsens
                $produsens->update([
                    'nama_produsen'     => $request->nama_produsen,
                    'no_telp_produsen'   => $request->no_telp_produsen,
                    'alamat_produsen'   => $request->alamat_produsen,
                    'status_produsen'   => $request->status_produsen,
                ]);

            //return response
            return new ProdusenResource(true, 'Data Produsen Berhasil Diubah!', $produsens);
        }

    public function destroy($id)
        {

            //find post by ID
            $produsens = Produsen::find($id);

            // Check if produsen exists
            if (!$produsens) {
                return new ProdusenResource(false, 'Data Produsen Tidak Ditemukan!', null);
            }

            //delete produsen
            $produsens->delete();

            //return response
            return new ProdusenResource(true, 'Data Produsen Berhasil Dihapus!', null);
        }
}

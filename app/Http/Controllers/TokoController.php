<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function index()
    {
        $toko = Toko::all();

        if($toko){
            $data = [
                'message' => "get all resource toko",
                'data' => $toko
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                'message' => "data empty",
            ];
            return response()->json($data, 404);
        }
    }

    public function store(Request $request){
        $input = [
            'nama_toko' => $request->nama_toko,
            'alamat_toko' => $request->alamat_toko,
            'no_telp_toko' => $request->no_telp_toko,
            'status_toko' => $request->status_toko,
        ];

        $toko = toko::create($input);

        $data = [
            'message' => 'toko is created successfully',
            'data' => $toko,
        ];
        return response()->json($data, 201);
    }

    public function show(Request $request, $id)
    {
        $toko = Toko::find($id);

        if ($toko) {
            $data = [
                "message" => "Resouces by id $id successfuly",
                "data" => $toko
            ];

            // mengembalikan data (json) dan kode 200

            return response()->json($data, 200);
        } else {
            $data = [
                'message' => "Resources not found"
            ];

            return response()->json($data, 404);
        }
    }

    public function update(Request $request, $id)
    {
        $toko = Toko::find($id);

        if ($toko) {
            // menagkap data request
            $input = [
                'nama_toko' => $request->nama_toko,
                'alamat_toko' => $request->alamat_toko,
                'no_telp_toko' => $request->no_telp_toko,
                'status_toko' => $request->status_toko,
            ];

            $toko->update($input);
            $data = [
                'message' => 'toko is updated',
                'data' => $toko
            ];

            #mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'toko Not Found'
            ];

            return response()->json($data, 404);
        }
    }

    public function destroy($id)
    {
        $toko = Toko::find($id);

        if ($toko) {
            $toko->delete($id);

            $data = [
                'message' => 'toko is deleted'
            ];

            # mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'toko not found'
            ];

            return response()->json($data, 404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengiriman extends Controller
{
        public function index()
    {
        $pengiriman = Pengiriman::all();

        if($pengiriman){
            $data = [
                'message' => "get all resource pengiriman",
                'data' => $pengiriman
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
            'nama_pengiriman' => $request->nama_pengiriman,
            'alamat_pengiriman' => $request->alamat_pengiriman,
            'no_telp_pengiriman' => $request->no_telp_pengiriman,
            'status_pengiriman' => $request->status_pengiriman,
        ];

        $pengiriman = Pengiriman::create($input);

        $data = [
            'message' => 'pengiriman is created successfully',
            'data' => $pengiriman,
        ];
        return response()->json($data, 201);
    }

    public function show(Request $request, $id)
    {
        $pengiriman = Pengiriman::find($id);

        if ($pengiriman) {
            $data = [
                "message" => "Resouces by id $id successfuly",
                "data" => $pengiriman
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
        $pengiriman = Pengiriman::find($id);

        if ($pengiriman) {
            // menagkap data request
            $input = [
                'nama_pengiriman' => $request->nama_pengiriman,
                'alamat_pengiriman' => $request->alamat_pengiriman,
                'no_telp_pengiriman' => $request->no_telp_pengiriman,
                'status_pengiriman' => $request->status_pengiriman,
            ];

            $pengiriman->update($input);
            $data = [
                'message' => 'pengiriman is updated',
                'data' => $pengiriman
            ];

            #mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'pengiriman Not Found'
            ];

            return response()->json($data, 404);
        }
    }

    public function destroy($id)
    {
        $pengiriman = Pengiriman::find($id);

        if ($pengiriman) {
            $pengiriman->delete($id);

            $data = [
                'message' => 'pengiriman is deleted'
            ];

            # mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'pengiriman not found'
            ];

            return response()->json($data, 404);
        }
    }
}

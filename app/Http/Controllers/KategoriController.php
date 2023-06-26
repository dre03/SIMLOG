<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        if($kategori){
            $data = [
                'message' => "get all resource kategori",
                'data' => $kategori
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
            'nama_kategori' => $request->nama_kategori,
            'status_kategori' => $request->status_kategori,
        ];

        $kategori = Kategori::create($input);

        $data = [
            'message' => 'Kategori is created successfully',
            'data' => $kategori,
        ];
        return response()->json($data, 201);
    }

    public function show(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        if ($kategori) {
            $data = [
                "message" => "Resouces by id $id successfuly",
                "data" => $kategori
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
        $kategori = Kategori::find($id);

        if ($kategori) {
            // menagkap data request
            $input = [
                'nama_kategori' => $request->nama_kategori,
                'status_kategori' => $request->status_kategori,
            ];

            $kategori->update($input);
            $data = [
                'message' => 'Kategori is updated',
                'data' => $kategori
            ];

            #mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Kategori Not Found'
            ];

            return response()->json($data, 404);
        }
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        if ($kategori) {
            $kategori->delete($id);

            $data = [
                'message' => 'kategori is deleted'
            ];

            # mengembalikan data (json) dan kode 200
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'kategori not found'
            ];

            return response()->json($data, 404);
        }
    }
}

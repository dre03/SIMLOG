<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistributorResource;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DistributorController extends Controller
{
    public function index()
    {
        // get all distributor
        $distributors = Distributor::latest()->paginate(5);

        return new DistributorResource(true, 'List Data Distributor', $distributors);
    }

    public function store(Request $request)
        {
            //define validation rules
            $validator = Validator::make($request->all(), [
                'nama_distributor'      => 'required',
                'no_telp_distributor'   => 'required|numeric',
                'alamat_distributor'    => 'required',
                'status_distributor'    => 'required|numeric',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            //create post
            $distributors = Distributor::create([
                'nama_distributor'     => $request->nama_distributor,
                'no_telp_distributor'  => $request->no_telp_distributor,
                'alamat_distributor'   => $request->alamat_distributor,
                'status_distributor'   => $request->status_distributor,
            ]);

            //return response
            return new DistributorResource(true, 'Data Distributor Berhasil Ditambahkan!', $distributors);
        }

    public function show($id)
        {
            //find distributor by ID
            $distributors = Distributor::find($id);
            //return single distributor as a resource

            if (!$distributors) {
                return new DistributorResource(false, 'Data Distributor Tidak Ditemukan!', null);
            }
            return new DistributorResource(true, 'Detail Data Distributor!', $distributors);
        }
    
    public function update(Request $request, $id)
        {
            //define validation rules
            $validator = Validator::make($request->all(), [
                'nama_distributor'     => 'required',
                'no_telp_distributor'  => 'required|numeric',
                'alamat_distributor'   => 'required',
                'status_distributor'   => 'required|numeric',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            //find post by ID
            $distributors = Distributor::find($id);
                //update distributor
                $distributors->update([
                    'nama_distributor'     => $request->nama_distributor,
                    'no_telp_distributor'   => $request->no_telp_distributor,
                    'alamat_distributor'   => $request->alamat_distributor,
                    'status_distributor'   => $request->status_distributor,
                ]);

            //return response
            return new DistributorResource(true, 'Data Distributor Berhasil Diubah!', $distributors);
        }

    public function destroy($id)
        {

            //find post by ID
            $distributors = Distributor::find($id);

            // Check if produsen exists
            if (!$distributors) {
                return new DistributorResource(false, 'Data Distributor Tidak Ditemukan!', null);
            }

            //delete produsen
            $distributors->delete();

            //return response
            return new DistributorResource(true, 'Data Distributor Berhasil Dihapus!', null);
        }
}

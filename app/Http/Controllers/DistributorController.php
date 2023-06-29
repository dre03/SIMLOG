<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;


class DistributorController extends Controller
{
    public function index()
    {
        $result = Distributor::all();

        return view('logistik.distributor', ['distributor' => $result]);
    }

    public function store(Request $request){

        $dataInput = $request->validate([
            'nama_distributor' => 'required',
            'no_telp_distributor' => 'required',
            'alamat_distributor' => 'required',
            'status_distributor' => 'required',
        ]) ;

        $distributor = Distributor::create($dataInput);
        
        if($distributor){
            return redirect('/distributor');
        }
    }

    public function edit(Request $request, $id)
    {
      // Validasi data input
        $request->validate([
            'nama_distributor' => 'required',
            'no_telp_distributor' => 'required',
            'alamat_distributor' => 'required',
            'status_distributor' => 'required',
        ]);

        // Update data distributor
        $distributor = Distributor::findOrFail($id);
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->no_telp_distributor = $request->no_telp_distributor;
        $distributor->alamat_distributor = $request->alamat_distributor;
        $distributor->status_distributor = $request->status_distributor;
        $distributor->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data distributor berhasil diupdate.');
    }

    public function destroy($id)
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->delete();

        return redirect()->back()->with('success', 'Data produsen berhasil dihapus.');
    }
}

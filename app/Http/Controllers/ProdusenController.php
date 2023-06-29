<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produsen;


class ProdusenController extends Controller
{
    public function index()
    {
        $result = Produsen::all();

        return view('logistik.produsen', ['produsen' => $result]);
    }

    public function store(Request $request){

        $dataInput = $request->validate([
            'nama_produsen' => 'required',
            'no_telp_produsen' => 'required',
            'alamat_produsen' => 'required',
            'status_produsen' => 'required',
        ]) ;

        $produsen = Produsen::create($dataInput);
        
        if($produsen){
            return redirect('/produsen');
        }
    }

    public function edit(Request $request, $id)
    {
      // Validasi data input
        $request->validate([
            'nama_produsen' => 'required',
            'no_telp_produsen' => 'required',
            'alamat_produsen' => 'required',
            'status_produsen' => 'required',
        ]);

        // Update data produsen
        $produsen = Produsen::findOrFail($id);
        $produsen->nama_produsen = $request->nama_produsen;
        $produsen->no_telp_produsen = $request->no_telp_produsen;
        $produsen->alamat_produsen = $request->alamat_produsen;
        $produsen->status_produsen = $request->status_produsen;
        $produsen->save();

        // Redirect ke halaman yang diinginkan atau tampilkan pesan berhasil
        return redirect()->back()->with('success', 'Data produsen berhasil diupdate.');
    }

    public function destroy($id)
    {
        $produsen = Produsen::findOrFail($id);
        $produsen->delete();

        return redirect()->back()->with('success', 'Data produsen berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{

    public function index()
    {
        $dtAlat = Alat::all();
        return view('admin.daerah',compact('dtAlat'));
    }

    public function create()
    {
        // $data=Alat::all();
        return view('admin.tambah');
    }

    public function store(Request $request){
        // dd($request->all());

        $messages = [
            'required' => ':attribute wajib diisi',
        ];

        $validated = $request->validate([
            'nama_alat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ],$messages);

        Alat::create([
            'nama_alat' => $request->nama_alat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect('data-daerah')->with('success', 'Data Alat Berhasil Ditambahkan!');
    }

    public function edit($id){
        $titik = Alat::findOrFail($id);
        return view('admin.edit',compact('titik'));
    }

    public function update(Request $request, $id){
        $titik = Alat::findOrFail($id);
        $titik->update($request->all());
        return redirect('data-daerah')->with('success', 'Data Alat Berhasil Diupdate!');
    }

    public function destroy($id){
        $titik = Alat::findOrFail($id);
        $titik->delete();
        return back()->with('success', 'Data Alat Berhasil Dihapus!');
    }
}

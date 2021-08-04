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
        Alat::create([
            'nama_alat' => $request->nama_alat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect('data-daerah');
    }
}

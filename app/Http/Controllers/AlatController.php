<?php

namespace App\Http\Controllers;
use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    //
    public function index()
    {
        $data=Alat::all();
        return view('admin.daerah', ['data' => $data]);
    }
}

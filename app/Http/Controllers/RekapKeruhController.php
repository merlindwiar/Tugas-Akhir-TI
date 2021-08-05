<?php

namespace App\Http\Controllers;
use App\Models\Kekeruhan;
use Illuminate\Http\Request;

class RekapKeruhController extends Controller
{

    public function index()
    {
        //
        $data=Kekeruhan::all();
        // dd($data);
        return view('content.rekapkeruh', compact('data'));

    }
}

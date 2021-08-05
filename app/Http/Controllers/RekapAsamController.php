<?php

namespace App\Http\Controllers;
use App\Models\Ph;
use Illuminate\Http\Request;

class RekapAsamController extends Controller
{
    public function index()
    {
        //
        // $pagename='Data Kuliah';
        $data=Ph::all();
        // dd($data);
        return view('content.rekapasam', compact('data'));

        // return view('content.rekapasam', ['data' => Ph::all()]);
    }
}

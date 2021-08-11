<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Ph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapAsamController extends Controller
{
    public function index(Request $request)
    {
        // $pagename='Data Kuliah';
        $data=Ph::all();
        // dd($request->all());

        // dd($data);
        return view('content.rekapasam', compact('data'));

        // return view('content.rekapasam', ['data' => Ph::all()]);
    }
    // public function searcKeruh(){
        // $data=Ph::all();
        // $query=Ph::all()->select()->get();
        // dd($data);
        // return view('content.rekapasam',compact('data','query'));
    // }

}

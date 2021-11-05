<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;

class RekapKeruhController extends Controller
{

    public function index()
    {
        //
        $data=Data::all();
        // dd($data);
        return view('content.rekapkeruh', compact('data'));

    }
    public function search(){
        // $formDate='2021-08-04';
        // $toDate='2021-08-09';
        $formDate = date('2018-01-01');
        $toDate = date('2018-05-02');

        $data=DB::table('kekeruhans')->select()
        ->where('created_at', '>=', $formDate)
        ->where('created_at', '<=', $toDate)
        ->get();
        dd($data);

        return view('content.rekapkeruh', compact('data'));
     }
}

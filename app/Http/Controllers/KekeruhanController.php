<?php

namespace App\Http\Controllers;
use App\Models\Kekeruhan;
use Illuminate\Http\Request;

class KekeruhanController extends Controller
{
    public function index()
    {
        //
        // $pagename='Data Kuliah';
        $data=Kekeruhan::all();
        return view('content.kekeruhan', ['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Ph;
use Illuminate\Http\Request;

class PhController extends Controller
{
    public function index()
    {
        //
        // $pagename='Data Kuliah';
        $data=Ph::all();
        return view('content.keasaman', ['data'=>$data]);
    }
}

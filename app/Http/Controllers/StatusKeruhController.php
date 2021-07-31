<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use StatusKekeruhan;

class StatusKeruhController extends Controller
{
    public function index(){
   	 $status_kekeruhan = Status_kekeruhan::all();
    	 return view('status_kekeruhan',['status_kekeruhan' => $status_kekeruhan]);
   }
}

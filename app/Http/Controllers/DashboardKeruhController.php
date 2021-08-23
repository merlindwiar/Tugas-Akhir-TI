<?php

namespace App\Http\Controllers;
use App\Models\Kekeruhan;

use Illuminate\Http\Request;

class DashboardKeruhController extends Controller
{
    public function dataTerakhirKeruh(){
        $data_terakhir_keruh=Kekeruhan::orderBy('id','desc')
        ->take(1)->get();
        return view('content.dashboard', compact('data_terakhir_keruh'));

    }
}

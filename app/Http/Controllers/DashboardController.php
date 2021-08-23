<?php

namespace App\Http\Controllers;
use App\Models\Ph;
use App\Models\Kekeruhan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dataTerakhir(){
        $data_terakhir_ph=Ph::orderBy('id','desc')
        ->take(1)->get();

        $data_terakhir_keruh=Kekeruhan::orderBy('id','desc')
        ->take(1)->get();
        return view('content.dashboard', compact('data_terakhir_ph','data_terakhir_keruh'));
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SensorTampilController extends Controller
{
    public function tampil()
    {

        $data = Data::whereDate('created_at', Carbon::today())->take(30)->get()->sortBy('id');
        $labels = $data->pluck('created_at');
        $data = $data->pluck('NTU');

        return response()->json(compact('labels', 'data'));
    }
    public function tampilph()
    {

        $data = Data::whereDate('created_at', Carbon::today())->take(30)->get()->sortBy('id');
        $labels = $data->pluck('created_at');
        $data = $data->pluck('kadar_ph');
        // $status = $status->pluck('status_ph');

        return response()->json(compact('labels', 'data'));
    }
}

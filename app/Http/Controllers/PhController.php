<?php

namespace App\Http\Controllers;
use App\Models\Data;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PhController extends Controller
{
    public function index()
    {
        //
        // $pagename='Data Kuliah';
        $data=Data::whereDate('created_at', Carbon::today())->get();

        // $groups = DB::table('phs')
        //     ->select('kadar_ph')
        //     ->get();

        //     // $chart = new Chart;
        //     // $chart->dataset = (array_values($groups));

        // dd($data);
        return view('content.keasaman', compact('data'));
    }
}

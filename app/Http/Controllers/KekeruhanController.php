<?php

namespace App\Http\Controllers;
use App\Models\Kekeruhan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KekeruhanController extends Controller
{
    public function index()
    {
        //
        // $pagename='Data Kuliah';
        $data=Kekeruhan::whereDate('created_at', Carbon::today())->get();;
        return view('content.kekeruhan', compact('data'));

        // $chart=Kekeruhan::select(\DB::raw("'COUNT(*) as count"))
        //         ->whereYear('created_at',date('Y'))
        //         ->groupBy(\DB::raw("Month(created_at)"))
        //         ->pluck('count')
        // ;
        // return view('content.kekeruhan',compact('chart'));

    }
}

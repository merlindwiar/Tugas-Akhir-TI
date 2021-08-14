<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ph;
use App\Models\Kekeruhan;

class SensorController extends Controller
{
    public function PhMasuk(Request $request)
    {

        $status = $request->input('kadar_ph');
        if ($status<7.00) {
            $hasil='Asam';
        }
        elseif ($status>7.00) {
            $hasil='Basa';
        }
        else {
            $hasil ='Netral';
        }
        //proses create data baru
        $ph = Ph::create([

            'kadar_ph' => $request->input('kadar_ph'),
            'status_ph' => $hasil,
        ]);

        if ($ph) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Disimpan!',
                'ph' => $ph,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Disimpan!',
            ], 401);
        }
    }

    public function NTUMasuk(Request $request)
    {

        $statusNtU = $request->input('NTU');
        if ($statusNtU<7.00) {
            $hasilNTU='Jernih';
        }
        else{
            $hasilNTU='Keruh';
        }
        //proses create data baru
        $ntu = Kekeruhan::create([

            'NTU' => $request->input('NTU'),
            'status_kekeruhan' => $hasilNTU,
        ]);

        if ($ntu) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Disimpan!',
                'NTU' => $ntu,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Disimpan!',
            ], 401);
        }
    }
}

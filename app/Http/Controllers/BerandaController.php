<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('content.dashboard');
    }

    public function halamansatu(){
        return view('content.keasaman');
    }

    public function halamandua(){
        return view('admin.daerah');
    }

    public function halamantiga(){
        return view('content.kekeruhan');
    }
}

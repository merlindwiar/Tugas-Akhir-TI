<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Pengguna.Login');
    }
    public function postlogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        else{
            return redirect('login')->with('error','Email atau Password anda salah!');
        }
        // return redirect('login')->with('alert','Email atau Password anda salah!');
    }
    public function logout(Request $request){
        // dd($request->all());
        Auth::logout();
        return redirect('/login')->with('message', 'Anda telah keluar Web Pantau Air');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin(){
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('Login');
    }

    public function postLogin(Request $request){
        $data_login = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        Auth::attempt($data_login);

        if(Auth::check()){
            return redirect()->route('home');
        } else {
            Session::flash('error', 'Email atau Password salah!!!');
            return redirect()->route('login');
        }
    }

    public function Logout(){
        Auth::logout();
        return redirect('/');
    }
}

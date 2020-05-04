<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthkarController extends Controller
{
    public function login()
    {
        return view('auths.loginkar');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('nik','password'))){
            return redirect('/employees');
        }
        return redirect('/loginkar');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

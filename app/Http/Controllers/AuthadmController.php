<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthadmController extends Controller
{
    public function login()
    {
        return view('auths.loginadm');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/admins');
        }
        return redirect('/loginadm');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

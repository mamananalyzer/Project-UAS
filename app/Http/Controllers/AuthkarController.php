<?php

namespace App\Http\Controllers;

use Auth;
use App\Employee;
use Illuminate\Http\Request;

class AuthkarController extends Controller
{
    public function login()
    {
        return view('auths.loginkar');
    }
    public function postlogin(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'password' => 'required',
        ]);

        $user_data = array(
            'nik'  => $request->get('nik'),
            'password' => $request->get('password')
        );
        if(!Auth::attempt($user_data)){
            return redirect('loginkar');
        }

        if ( Auth::check() ) {
            return redirect('employees');
        }


        // if(Auth::guard('employees')->attempt($request->only('nik','password'))){
        //     return redirect('/employees');
        // }
        return redirect('/loginkar');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

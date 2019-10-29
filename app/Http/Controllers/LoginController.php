<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Login.login');
    }

    public function login(Request $request)
    {
        $credentials =$request->validate([
            'school_mail'=> 'required|email',
            'password'=> 'required'
        ]);
        if(Auth::guard('stu')->attempt($credentials)){
            return redirect('documents');
        }
        else{
            return redirect('login')->withErrors(['password'=> 'Email or Password incorrect!']);
        }
    }
    public function logout()
    {
        Auth::guard('stu')->logout();
        return redirect('documents');
    }
}

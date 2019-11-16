<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:stu', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('Login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'school_mail' => 'required|email|ends_with:mtu.edu.mm',
            'password'    => 'required'
        ]);
        if (Auth::guard('stu')->attempt($credentials)) {
            return redirect('documents');

        } elseif (Auth::guard('hod')->attempt($credentials)) {

            return redirect(route('hods.show'));
        } else {
            return redirect('login')->withErrors(['password' => 'Email or Password incorrect!']);
        }
    }

    public function logout()
    {
        Auth::guard('stu')->logout();
        Auth::guard('hod')->logout();
        return redirect('/');
    }
}

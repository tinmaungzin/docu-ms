<?php

namespace App\Http\Controllers;

use App\Models\Hod;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:stu',['only'=> 'about']);
        $this->middleware('auth:hod',['only'=> 'hodAbout']);
    }

    public function about()
    {

        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        return view('Info.about',compact('auth_user'));
    }

    public function hodAbout()
    {
        $id = Auth::user()->id;
        $auth_user = Hod::find($id);
        return view('Info.about',compact('auth_user'));
    }
    public function guestAbout()
    {
        return view('Info.about');
    }
}

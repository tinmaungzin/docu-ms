<?php

namespace App\Http\Controllers;

use App\Models\Hod;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:hod');
    }

    public function show()
    {
        $id = Auth::user()->id;
        $auth_user = Hod::find($id);
//        dd($id);
        $major = $auth_user->major;
        $documents = $major->documents->where('approved',false);
        dd($documents);
    }
}

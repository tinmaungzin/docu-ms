<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:stu',['only'=> 'index']);
    }

    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        $query = $request->get('query');
        $documents = Document::where('title', 'like', '%' . $query . '%')->where('approved',true)->get();
        return view('Search.index',compact('auth_user','documents'));
    }
    public function guestIndex(Request $request)
    {
        $query = $request->get('query');
        $documents = Document::where('title', 'like', '%' . $query . '%')->get();
        return view('Search.index',compact('documents'));


    }
}

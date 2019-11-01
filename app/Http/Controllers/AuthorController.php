<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:stu',['only' => 'show']);
    }

    public function show(Author $author)
    {
        $id = Auth::user()->id;
        $student = Student::find($id);
        $documents = $author->documents;
        return view('Authors.show',compact('author','documents','student'));
    }

    public function guestShow(Author $author)
    {
        $documents = $author->documents;
        return view('Authors.show',compact('author','documents'));
    }
}

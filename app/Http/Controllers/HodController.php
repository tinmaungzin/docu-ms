<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Hod;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $major = $auth_user->major;
        $documents = $major->documents->where('approved',false);
        return view('Hods.show',compact('documents','auth_user'));
    }

    public function detail(Document $document)
    {
        $id = Auth::user()->id;
        $auth_user = Hod::find($id);
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        $histories = $document->document_histories;
        $bookmark = $owner->bookmarks->where('document_id' , $document->id);
        $authors = $document->authors;
        $major = $document->major;
        return view('Hods.detail',compact('document','owner','auth_user','histories','bookmark','authors','major'));
    }

    public function approve(Document $document)
    {
        $document->approved= true;
        $document->save();
        Session::flash('msg', $document->title.' is approved Successfully!');
        return redirect(route('hods.list'));
    }

    public function list()
    {
        $id = Auth::user()->id;
        $auth_user = Hod::find($id);
        $major = $auth_user->major;
        $documents = $major->documents->where('approved',true);
        return view('Hods.list',compact('documents','auth_user'));
    }
}

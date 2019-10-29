<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use App\Models\Keyword;
use App\Models\Student;
use App\Models\Submajor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:stu',['except' => ['guestIndex','guestShow']]);
    }

    public function index()
    {
        $documents = Document::paginate(8);
        return view('Documents.index', compact('documents'));
    }

    public function guestIndex()
    {
        $documents = Document::paginate(8);
        return view('Documents.index', compact('documents'));
    }

    public function create()
    {
        $id = Auth::user()->id;
        $student = Student::find($id);
        $major = $student->major;
        $submajors = $student->major->submajors;
        return view('Documents.create',compact('major','submajors','student'));
    }

    public function store(DocumentRequest $request)
    {

        $data = $request->except('pdf_file');
        $data['filename'] = $this->saveFile($request->file('pdf_file'));
        Document::create($data);
        return redirect(route('documents.index'));
    }

    public function saveFile($file)
    {
        $randomNum = rand(10000, 99999);
        $destinationPath = storage_path('/pdf');
        $fileName = $randomNum.'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$fileName);
        return $fileName;
    }

    public function show(Document $document)
    {
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        return view('Documents.show',compact('document','owner'));
    }
    public function guestShow(Document $document)
    {
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        return view('Documents.show',compact('document','owner'));
    }

}

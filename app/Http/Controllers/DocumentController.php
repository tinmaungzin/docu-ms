<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Bookmark;
use App\Models\DocumentHistory;
use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use App\Models\Keyword;
use App\Models\Student;
use App\Models\Submajor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:stu',['except' => ['guestIndex','guestShow']]);
    }

    public function index()
    {
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        $documents = Document::where('approved',true)->paginate(8);
        return view('Documents.index', compact('documents','auth_user'));
    }

    public function guestIndex()
    {
        $documents = Document::where('approved',true)->paginate(8);
        return view('Documents.index', compact('documents'));
    }

    public function create()
    {
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        $major = $auth_user->major;
        $submajors = $auth_user->major->submajors;
        return view('Documents.create',compact('major','submajors','auth_user'));
    }

    public function store(DocumentRequest $request)
    {

        $data = $request->except('pdf_file','author_name','author_mail');
        $data['filename'] = $this->saveFile($request->file('pdf_file'));
        $document = Document::create($data);
        $author = Author::where('mail', $request->author_mail)->get();
        if($author->count()>0){
            $document->authors()->attach($author[0]->id);
        }else{
            $author = new Author();
            $author->name = $request->author_name;
            $author->mail = $request->author_mail;
            $author->save();
            $document->authors()->attach($author->id);
        }
        Session::flash('msg', 'Document created Successfully but please wait for HOD to approve it!');
        return redirect(route('documents.show',['document'=> $document->id]));
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
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        $histories = $document->document_histories;
        $bookmark = $auth_user->bookmarks->where('document_id' , $document->id);
        $authors = $document->authors;
        $major = $document->major;
        return view('Documents.show',compact('document','owner','auth_user','histories','bookmark','authors','major'));
    }

    public function guestShow(Document $document)
    {
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        $authors = $document->authors;
        $major = $document->major;
        $histories = $document->document_histories;

        return view('Documents.show',compact('document','owner','authors','major','histories'));
    }

    public function edit(Document $document)
    {
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        if($document->owner_id=== $auth_user->id){
            $major = $auth_user->major;
            $submajors = $auth_user->major->submajors;
            $authors = $document->authors;
            return view('Documents.edit',compact('submajors','auth_user','major','document','authors'));
        }else{
            return redirect(route('login'));
        }

    }

    public function update(DocumentRequest $request, Document $document)
    {
        $history = new DocumentHistory();
        $history->document_id = $document->id;
        $history->title = $document->title;
        $history->abstract = $document->abstract;
        $history->filename = $document->filename;
        $history->owner_id = $document->owner_id;
        $history->major_id = $document->major_id;
        $history->submajor_id = $document->submajor_id;
        $history->save();
        $history_author = Author::where('mail', $request->author_mail)->get();
        if($history_author->count()>0){
            $history->authors()->attach($history_author[0]->id);
        }else{
            $author = new Author();
            $author->name = $request->author_name;
            $author->mail = $request->author_mail;
            $author->save();
            $history->authors()->attach($author->id);
        }

        $data = $request->except('pdf_file','author_name','author_mail');
        $data['filename'] = $this->saveFile($request->file('pdf_file'));
        $document->update($data);
        $author = Author::where('mail', $request->author_mail)->get();
        if($author->count()>0){
            $document->authors()->detach();
            $document->authors()->attach($author[0]->id);
        }else{
            $author = new Author();
            $author->name = $request->author_name;
            $author->mail = $request->author_mail;
            $author->save();
            $document->authors()->detach();
            $document->authors()->attach($author->id);
        }
        Session::flash('msg', 'Document updated Successfully!');
        return redirect(route('documents.show',['document' => $document->id]));
    }

}

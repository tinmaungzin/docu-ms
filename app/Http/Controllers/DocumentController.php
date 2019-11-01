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

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:stu',['except' => ['guestIndex','guestShow']]);
    }

    public function index()
    {
        $id = Auth::user()->id;
        $student = Student::find($id);
        $documents = Document::paginate(8);
        return view('Documents.index', compact('documents','student'));
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
        $id = Auth::user()->id;
        $student = Student::find($id);
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        $histories = $document->document_histories;
        $bookmark = $student->bookmarks->where('document_id' , $document->id);
        $authors = $document->authors;
        return view('Documents.show',compact('document','owner','student','histories','bookmark','authors'));
    }

    public function guestShow(Document $document)
    {
        $owner = Student::where('id',$document->owner_id)->firstOrFail();
        return view('Documents.show',compact('document','owner'));
    }

    public function edit(Document $document)
    {
        $id = Auth::user()->id;
        $student = Student::find($id);
        $major = $student->major;
        $submajors = $student->major->submajors;
        $authors = $document->authors;
        return view('Documents.edit',compact('submajors','student','major','document','authors'));
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
        return redirect(route('documents.show',['document' => $document->id]));
    }

}

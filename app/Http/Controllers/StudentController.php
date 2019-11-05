<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Document;
use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:stu',['only' => ['create','store']]);
        $this->middleware('auth:stu',['only' => ['edit','update','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $majors = Major::all();
        return view('Students.create', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $data = $request->except('password','confirm_password');
        $data['password'] = bcrypt($request['password']);
        Student::create($data);
        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        $documents = $student->documents->all();
//        dd($documents);
        return view('Students.show', compact('student', 'documents','auth_user'));
    }
    public function guestShow(Student $student)
    {
        $documents = $student->documents->all();
//        dd($documents);
        return view('Students.show', compact('student', 'documents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        $bookmarkeds= [];
        if($student->bookmarks){
            $bookmarks = $student->bookmarks;
            foreach($bookmarks as $bookmark){
//                dd($bookmark->id);
//                dd(Document::where('id', $bookmark->id)->get());
                $bookmarkeds = Document::where('id', $bookmark->document_id)->get();
            }
        }
//        dd($bookmarkeds);
        $majors = Major::all();
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        return view('Students.edit', compact('student','majors','bookmarkeds','auth_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

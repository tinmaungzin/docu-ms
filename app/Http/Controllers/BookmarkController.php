<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index($student, $document)
    {

        $bookmark = new Bookmark();
//        dd($bookmark->checkBookmark($document, $student));
        if($bookmark->checkBookmark($document, $student)->count()>0){
            $bookmark->checkBookmark($document,$student)->delete();
        }else{
            $bookmark->student_id = $student;
            $bookmark->document_id = $document;
            $bookmark->save();
        }

        return redirect()->back();
    }
}

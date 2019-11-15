<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Student;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:stu', ['only' => 'index']);
    }

    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $auth_user = Student::find($id);
        $query = $request->get('query');
        $documents = $this->searchQuery($query);
        return view('Search.index', compact('auth_user', 'documents'));
    }

    public function guestIndex(Request $request)
    {
        $query = $request->get('query');
        $documents = $this->searchQuery($query);
        return view('Search.index', compact('documents'));

    }

    public function searchQuery($query)
    {
        return $documents = Document::where(function ($q) use ($query) {
            $q->where('title', 'like', '%' . $query . '%')
                ->where('approved', true);
        })->orWhere(function ($q) use ($query) {
            return $q->whereHas('keywords', function ($q) use ($query) {
                $query = explode(' ', $query);
                $q->whereIn('name', $query);
            })->where('approved', true);
        })->get();
    }
}

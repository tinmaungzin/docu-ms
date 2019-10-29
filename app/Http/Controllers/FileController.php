<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function downloadFile($name)
    {
        return response()->file(storage_path().'/pdf/'.$name);

    }
}

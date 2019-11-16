<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function downloadFile($name)
    {
        if (file_exists(storage_path('pdf/watermarked/' . $name))) {
            return response()->file(storage_path('pdf/watermarked/' . $name));
        } else {
            return response()->file(storage_path() . '/pdf/' . $name);
        }
    }
}

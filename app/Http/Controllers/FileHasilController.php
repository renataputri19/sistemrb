<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileHasilController extends Controller
{
    public function filehasil()
    {
        

        // If the user is a guest, show the home page
        return view('filehasil');
    }
}

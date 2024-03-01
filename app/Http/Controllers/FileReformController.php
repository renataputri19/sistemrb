<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileReformController extends Controller
{
    public function filereform()
    {
        

        // If the user is a guest, show the home page
        return view('filereform');
    }
}

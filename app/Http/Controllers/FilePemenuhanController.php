<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FilePemenuhanController extends Controller
{
    public function filepemenuhan()
    {
        

        // If the user is a guest, show the home page
        return view('filepemenuhan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;


class SdiController extends Controller
{
    public function sdi()
    {
        

        // If the user is a guest, show the home page
        return view('sdi');
    }
}


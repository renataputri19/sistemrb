<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;


class ReformController extends Controller
{
    public function reform()
    {
        

        // If the user is a guest, show the home page
        return view('reform');
    }
}


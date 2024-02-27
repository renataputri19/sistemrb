<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class SnController extends Controller
{
    public function sn()
    {
        

        // If the user is a guest, show the home page
        return view('sn');
    }
}

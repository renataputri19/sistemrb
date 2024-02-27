<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class KdController extends Controller
{
    public function kd()
    {
        

        // If the user is a guest, show the home page
        return view('kd');
    }

}

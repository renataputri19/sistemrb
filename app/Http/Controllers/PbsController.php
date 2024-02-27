<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class PbsController extends Controller
{
    public function pbs()
    {
        

        // If the user is a guest, show the home page
        return view('pbs');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function hasil()
    {
        

        // If the user is a guest, show the home page
        return view('hasil');
    }
}

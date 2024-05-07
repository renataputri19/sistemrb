<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class PenilaianMandiriController extends Controller
{
    public function penilaianmandiri()
    {
        

        // If the user is a guest, show the home page
        return view('penilaianmandiri');
    }
}

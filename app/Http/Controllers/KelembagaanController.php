<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class KelembagaanController extends Controller
{
    public function kelembagaan()
    {
        

        // If the user is a guest, show the home page
        return view('kelembagaan');
    }
}

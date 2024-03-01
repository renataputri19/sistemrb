<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class PemenuhanController extends Controller
{
    public function pemenuhan()
    {
        

        // If the user is a guest, show the home page
        return view('pemenuhan');
    }

}

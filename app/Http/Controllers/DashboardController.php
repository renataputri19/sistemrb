<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        

        // If the user is a guest, show the home page
        return view('dashboard');
    }
}

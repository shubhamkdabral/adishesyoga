<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function index()
    {
        return view('who-we-are');
    }
}

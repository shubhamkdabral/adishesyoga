<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Retreat extends Controller
{
    public function index()
    {
        return view('retreats');
    }
}

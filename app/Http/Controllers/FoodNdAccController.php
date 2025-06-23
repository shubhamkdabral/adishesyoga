<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodNdAccController extends Controller
{
    public function index()
    {
        return view('food-accommodation');
    }
}

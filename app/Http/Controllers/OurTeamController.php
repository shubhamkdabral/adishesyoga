<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $ourteam = OurTeam::with('media')->get();
        return view('our-team', compact('ourteam'));
    }
}

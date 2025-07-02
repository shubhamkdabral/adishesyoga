<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function index()
    {
        $ourteacher = OurTeam::with('media')->where('type', 'teacher')->get();
        $ourteam = OurTeam::with('media')->where('type', 'team')->get();
        return view('our-team', compact('ourteam', 'ourteacher'));
    }
}

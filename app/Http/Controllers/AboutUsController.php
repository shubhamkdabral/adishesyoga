<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Achievements;
use App\Models\CoreValues;
use App\Models\Founders;
use App\Models\MissionVision;
use App\Models\OurPhilosophy;
use App\Models\OurTeam;
use App\Models\Recognition;
use App\Models\Reviews;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::with('media')->first();
        $ourPhilosophy = OurPhilosophy::with('media')->get();
        $missionVision = MissionVision::first();
        $corevalues = CoreValues::get();
        $achievements = Achievements::get();
        $recognitions = Recognition::with('media')->get();
        $reviews = Reviews::with('media')->get();
        $ourteam = OurTeam::with('media')->get();



        return view('who-we-are', compact(
            'about',
            'reviews',
            'ourteam',
            'ourPhilosophy',
            'missionVision',
            'corevalues',
            'achievements',
            'recognitions'
        ));
    }

    public function founders()
    {
        $founders = Founders::with('media')->get();

        return view('founders', compact('founders'));
    }
}

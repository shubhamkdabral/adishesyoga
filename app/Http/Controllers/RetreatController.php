<?php

namespace App\Http\Controllers;

use App\Models\Retreat;
use Illuminate\Http\Request;

class RetreatController extends Controller
{
    public function index()
    {
        return view('retreats');
    }

    public function retreatDetails($slug)
    {
        $retreat = Retreat::with(['media', 'highlights', 'learnings.media', 'schedule', 'carry', 'travelInfo', 'foodNdAcc.media', 'nearBy.media'])->where('slug', $slug)->firstOrFail();
        $retreatHighlights = $retreat->highlights;
        $retreatLearnings = $retreat->learnings;
        $retreatSchedules = $retreat->schedule;
        $retreatCarries = $retreat->carry;
        $travelInfo = $retreat->travelInfo;
        $foodNdAcc = $retreat->foodNdAcc;
        $nearBy = $retreat->nearBy;

        return view('retreat-details', compact('retreat', 'retreatHighlights', 'retreatLearnings', 'retreatSchedules', 'retreatCarries', 'travelInfo', 'foodNdAcc', 'nearBy'));
    }

    public function himalayanHiking()
    {
        $otherRetreats = Retreat::with(['media', 'nearBy.media'])->where('slug', '!=', 'himalayan-hiking')->get();
        $retreat = Retreat::with(['media', 'nearBy.media'])->where('slug', 'himalayan-hiking')->firstOrFail();
        $nearBy = $retreat->nearBy;
        return view('himalayan-hiking', compact('retreat', 'nearBy', 'otherRetreats'));
    }

    public function hathaYoga()
    {
        $otherRetreats = Retreat::with(['media', 'nearBy.media'])->where('slug', '!=', '7-days-hatha-yoga')->get();
        return view('7-days-hatha-yoga', compact('otherRetreats'));
    }

    public function kundaliniYoga()
    {
        $otherRetreats = Retreat::with(['media', 'nearBy.media'])->where('slug', '!=', '7-days-kundalini-yoga')->get();
        return view('7-days-kundalini-yoga', compact('otherRetreats'));
    }
}

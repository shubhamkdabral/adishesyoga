<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ImageSlider;
use App\Models\OurTeam;
use App\Models\Retreat;
use App\Models\Reviews;
use App\Models\Slider;
use App\Models\Stays;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::with('media')->where('status', 1)->orderBy('slider_no')->get();
        $about = AboutUs::with('media')->first();
        $imageSlider = ImageSlider::with('media')->get();
        $retreat = Retreat::with('media')->get();
        $whyChooseUs = WhyChooseUs::get();
        $stays = Stays::with('media')->get();
        $reviews = Reviews::with('media')->get();
        $ourteam = OurTeam::with('media')->get();


        return view('index', compact(
            'sliders',
            'about',
            'imageSlider',
            'retreat',
            'whyChooseUs',
            'stays',
            'reviews',
            'ourteam'
        ));
    }
}

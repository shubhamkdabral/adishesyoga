<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ImageSlider;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::with('media')->where('status', 1)->orderBy('slider_no')->get();
        $about = AboutUs::with('media')->first();
        $imageSlider = ImageSlider::with('media')->get();

        return view('index', compact('sliders', 'about', 'imageSlider'));
    }
}

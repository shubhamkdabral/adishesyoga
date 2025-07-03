<?php

namespace App\Http\Controllers;

use App\Models\ContactUs as ModelsContactUs;
use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function index()
    {
        $contactUs = ModelsContactUs::with('media')->first();
        return view('contact-us', compact('contactUs'));
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function refundPolicy()
    {
        return view('refund-policy');
    }
}

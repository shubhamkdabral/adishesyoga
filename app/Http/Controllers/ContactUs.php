<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function index()
    {
        return view('privacy-policy');
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

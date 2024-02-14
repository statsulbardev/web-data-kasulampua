<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    public function index()
    {
        return view('frontend.publication');
    }
}

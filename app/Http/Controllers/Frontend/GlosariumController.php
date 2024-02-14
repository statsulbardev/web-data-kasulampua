<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class GlosariumController extends Controller
{
    public function index()
    {
        return view('frontend.glosarium');
    }
}

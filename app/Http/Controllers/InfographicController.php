<?php

namespace App\Http\Controllers;

use App\Trait\InfographicTrait;

class InfographicController extends Controller
{
    use InfographicTrait;

    public function index()
    {
        return view('frontend.infographic.index', ['infographics' => $this->getInfographic()]);
    }
}

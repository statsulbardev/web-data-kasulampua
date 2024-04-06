<?php

namespace App\Http\Controllers;

use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();

        return view('frontend.publication.index', ['publications' => $publications]);
    }
}

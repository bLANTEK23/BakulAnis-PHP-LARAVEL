<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about.index', [
            'title' => 'Tentang',
            'active' => 'about',
        ]);
    }
}

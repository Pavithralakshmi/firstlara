<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['company' => 'Nithra Info Solutions']);
    }
    public function about()
    {
        return view('pages.about', ['company' => 'Nithra Info Solutions']);
    }
    public function contact()
    {
        return view('pages.contact', ['company' => 'Nithra Info Solutions']);
    }
    public function team()
    {
        return view('pages.team', ['company' => 'Nithra Info Solutions']);
    }
}

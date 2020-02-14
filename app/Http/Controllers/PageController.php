<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/Calcutta');
        $hour = date('G');
        return view('pages.home',[
            'company' => 'Nithra Info Solutions',
           'hour' => $hour 
           ]);
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
        return view('pages.team', [
            'company' => 'Nithra Info Solutions',
        'totalmembers' => 50]);
    }
}

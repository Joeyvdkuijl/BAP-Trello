<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function overzicht()
    {
        return view('overzicht');
    }
    public function infoJoey() 
    {
        return view('info');
    }
}
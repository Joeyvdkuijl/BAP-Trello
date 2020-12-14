<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutMe(){
        return view('blog.aboutme.aboutme');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function mySocials($id){
        return view('social.socials', ['id'=> $id]);
    }
}

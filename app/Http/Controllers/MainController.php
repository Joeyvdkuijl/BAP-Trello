<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class MainController extends Controller
{
    public function overzicht()
    {
        return view('blog.overzicht');
    }
    public function infoJoey() 
    {
        return view('blog.info');
    }
    public function myInfo() 
    {
        $user = User::all();

        return view('blog.infoUser', ['gebruiker' => $user]);
    }
}

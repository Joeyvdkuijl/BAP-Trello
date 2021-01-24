<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Info() 
    {
        $users = Auth::user();
        return view('blog.infoUser',['users'=>$users]);
    }
}

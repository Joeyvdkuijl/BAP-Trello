<?php

namespace App\Http\Controllers;
use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class MainController extends Controller
{
    public function overzicht()
    {
        $posts = BlogPost::all();
        return view('blog.overzicht', [ 'posts'=>$posts]);
    }
    public function infoJoey() 
    {
        return view('blog.info');
    }
    public function myProjects() 
    {
        return view('blog.project.project');
    }
    public function myInfo() 
    {
        $users = DB::select('select * from users');
        return view('blog.infoUser',['users'=>$users]);
    }
}

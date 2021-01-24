<?php

namespace App\Http\Controllers;
use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function overzicht()
    {
        $posts = BlogPost::paginate(9);
        return view('blog.overzicht', [ 'posts'=>$posts]);
    }
    // public function detail($id)
    // {
    //     $post = BlogPost::find($id);
    //     return view('blog.detail', ['post' => $post]);
    // }
    public function edit($id)
    {

    }
    public function infoJoey() 
    {
        return view('blog.info');
    }
    // public function myProjects() 
    // {
    //     return view('blog.project.project');
    // }
}

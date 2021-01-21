<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function theBlog($id, $post){
        return view('blog.blog', ['id'=> $id, 'post'=>$post]);
    }
    public function reviewBlog($id){
        return view('blog.review', ['id'=> $id]);
    }
    public function questionBlog($id){
        return view('blog.question', ['id'=> $id]);
    }
}

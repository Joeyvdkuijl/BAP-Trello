<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;
use Egulias\EmailValidator;


class BlogAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogpost = BlogPost::all();
        $blogpost = BlogPost::paginate(20);

        return view('overzicht.page', ['posts' => $blogpost]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.blogAdd');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'fullname' => 'required|min:2',
                'email' => 'required|email:rfc,dns',
                'title' => 'required',
                'blog_post' => 'required|min:10',
                'pub_date' => 'required|after_or_equal:today'
            ]
            );
        // $blog = new BlogPost();
        // $blog->title=$data['title'];
        // $blog->inhoud=$data['blog_post'];
        // $blog->firstname=$data['firstname'];
        // $blog->lastname=$data['lastname'];
        // $blog->date=$data['pub_date'];
        // $blog->email=$data['email'];
        // $blog->save();

        $blogpost = BlogPost::create($data);

        return redirect()->route('overzicht.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

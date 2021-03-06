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
        // $blogpost = BlogPost::paginate(10);
        // return view('blog.overzicht', ['posts' => $blogpost]);

    }
    public function __construct()
    {
        $this->middleware('auth');
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

    public function editform($id) {
        $blogpost = BlogPost::where('id', $id)->get();
        return view('blog.edit', ['blog' => $blogpost]);
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
                'pub_date' => 'required|after_or_equal:today',
                'image' => 'image'
            ]
        );
        $newFilename =  $data['image']->store('posts', 'public');
        $data['image'] = $newFilename;
        BlogPost::create($data);
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
        $post = BlogPost::find($id);
        return view('blog.detail', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $data = $request->validate(
            [
                'fullname' => 'required|min:2',
                'email' => 'required|email:rfc,dns',
                'title' => 'required',
                'blog_post' => 'required|min:10',
            ]
        );

        BlogPost::where('id', $id)->update($data);

        $post = BlogPost::paginate(9);

        return view('blog.overzicht', ['posts' => $post]);
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

    public function delete($id) {
        BlogPost::where('id', $id)->delete();

        // $post = BlogPost::paginate(9);
        return redirect()->route('overzicht.page', ['id' => $id]);
    }
}

@extends('layouts.layout')

@section('page_title')
   blog Edit
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
      <p>Er is een fout opgetreden, de post is niet geüpload!</p>
    </div>
@endif
@foreach($blog as $post)
<form action="{{ route('blog.edit', ['id' => $post['id']]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>EDIT</h2>
    <ul class="form-style-1">
        <li><label>Full Name <span class="required">*</span></label>
            <input type="text" name="fullname" class="field-long @error('fullname') is-invalid @enderror" placeholder="Random Person" value="{{ $post['fullname'] }}" /> 
            @error('fullname')''
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <li>
            <label>Email <span class="required">*</span></label>
            <input placeholder="randomUser@hotmail.com" type="email" name="email" class="field-long @error('email') is-invalid @enderror" value="{{ $post['email']}}" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </li>
        <li>
            <label>Title <span class="required">*</span></label>
            <input type="title" name="title" class="field-long @error('title') is-invalid @enderror" value="{{ $post['title'] }}" />
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </li>      
        <li>
            <label>Blog post <span class="required">*</span></label>
            <textarea name="blog_post" id="field5" class="field-long field-textarea @error('blog_post') is-invalid @enderror">{{ $post['blog_post'] }}</textarea>
            @error('blog_post')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </li>
        <li>
            <label>Image</label>
            <input type="file" name="image" class="field-long @error('image') is-invalid @enderror"  />
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </li>
        <li>
            <input type="submit" value="Commit new post" />
        </li>
    </ul>
    </form>
    @endforeach
@endsection
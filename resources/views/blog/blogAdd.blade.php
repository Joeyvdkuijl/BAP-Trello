@extends('layouts.layout')

@section('page_title')
   blog new post
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
      <p>Er is een fout opgetreden, de post is niet geüpload!</p>
    </div>
@endif

<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    <ul class="form-style-1">
        <li><label>Full Name <span class="required">*</span></label>
            <input type="text" name="fullname" class="field-long @error('fullname') is-invalid @enderror" placeholder="First" value="{{ old('fullname') }}" /> 
            @error('fullname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <li>
            <label>Email <span class="required">*</span></label>
            <input placeholder="randomUser@hotmail.com" type="email" name="email" class="field-long @error('email') is-invalid @enderror" value="{{ old('email') }}" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </li>
        <li>
            <label>Title <span class="required">*</span></label>
            <input type="title" name="title" class="field-long @error('title') is-invalid @enderror" value="{{ old('title') }}" />
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </li>      
        <li>
            <label>Blog post <span class="required">*</span></label>
            <textarea name="blog_post" id="field5" class="field-long field-textarea @error('blog_post') is-invalid @enderror">{{ old('blog_post') }}</textarea>
            @error('blog_post')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </li>
        <li>
            <label>date of publication <span class="required">*</span></label>
            <input type="date" name="pub_date" class="field-long @error('pub_date') is-invalid @enderror" value="{{ old('pub_date') }}" />
            @error('pub_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </li>
        <li>
            <input type="submit" value="Commit new post" />
        </li>
    </ul>
    </form>
@endsection
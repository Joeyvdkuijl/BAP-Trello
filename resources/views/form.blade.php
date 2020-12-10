@extends('layout')

@section('page_title')
    Contact
@endsection

@section('article')
    <h1>FORM</h1>
    <form action="{{ route('from.handle') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" value="" name="name">
        @error('name')
            {{ $message }}
        @enderror
    </form>
@endsection
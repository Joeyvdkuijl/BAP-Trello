@extends('layout')

@section('page_title')
    Overzicht-overblog
@endsection

@section('overzicht')
        <h1>Overzicht</h1>
<a href="{{ route('info.aboutme') }}"><button type="submit">Info</button></a>
<a href="{{ route('project.info') }}"><button type="submit">Project</button></a>
<a href="{{ route('from.contact') }}"><button type="submit">Contact</button></a>
@endsection
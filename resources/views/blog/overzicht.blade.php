@extends('../layouts/layout')

@section('page_title')
    Overzicht-overblog
@endsection

@section('overzicht')
<div class="post">
    @foreach($posts as $post)
    <div class="cardMain">
            <p class="beautyMode"><span style="font-weight: 600">Title:</span> {{ $post->title }}</p>
            <p class="beautyMode"><span style="font-weight: 600">Inhoud:</span> {{ $post->blog_post }}</p>
            <p class="beautyMode"><span style="font-weight: 600">Name:</span> {{ $post->fullname }}</p>
            <p class="beautyMode"><span style="font-weight: 600">Date:</span> {{ $post->pub_date }}</p>
            <a class="btn btn-primary btn-lg detail" href="{{ route('overzicht.detail', ['id' => $post->id ]) }}"> Detail</a>
            <a class="btn btn-success btn-lg detail2" href="{{route('blog.editform', ['id' => $post->id ])}}">Edit</a>
            <a class="btn btn-danger btn-lg detail3" href="{{route('blog.delete', ['id' => $post->id])}}">Delete</a>
    </div>
    @endforeach
</div>
<div style="    margin-left: 3%;
font-size: 25px;">
    {{ $posts->links() }}
</div>
@endsection
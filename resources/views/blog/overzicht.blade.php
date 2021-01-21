@extends('../layouts/layout')

@section('page_title')
    Overzicht-overblog
@endsection

@section('overzicht')
<table class="table table-condensed table-bordered">
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->blog_post }}</td>
            <td>{{ $post->fullname }}</td>
            <td>{{ $post->pub_date }}</td>
        </tr>
    @endforeach
</table>
{{ $posts->links() }}
@endsection
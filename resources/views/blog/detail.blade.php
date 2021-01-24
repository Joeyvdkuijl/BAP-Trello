@extends('../layouts/detaillayout')

@section('page_title')
    detail-overblog
@endsection

@section('overzicht')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h5>INHOUD</h5>
                <p class="mb-0">{{$post->blog_post}}</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box">
                <p><b>Title:</b> {{$post->title}}</p>
                <p><b>Date:</b> {{$post->pub_date}}</p>
                <p><b>Designer:</b> {{$post->fullname}}</p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->
        
        <div class="col-md-7">
            <img style="max-height: 500px; max-width: 500px;" src="{{ asset('storage/' . $post->image) }}" alt="project-image" class="rounded">
        </div><!-- / column -->
    </div>
</div>
@endsection
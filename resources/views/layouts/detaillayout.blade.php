<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('/css/detailpage.css') }}">
    <title>@yield("page_title")</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="btn btn-secondary btn-lg {{ Route::currentRouteName() == "overzicht.page" ? 'active' : '' }}" href="{{ route('overzicht.page') }}">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link homebtn {{ Route::currentRouteName() == "info.aboutme" ? 'active' : '' }}" href="{{ route('info.aboutme') }}">Info</a>
          </li>
          <li class="nav-item">
              {{-- <a class="nav-link homebtn  {{ Route::currentRouteName() == "project.info" ? 'active' : '' }}" href="{{ route('project.info') }}">Project</a> --}}
          </li>
          <li class="nav-item">
              <a class="nav-link homebtn  {{ Route::currentRouteName() == "from.contact" ? 'active' : '' }}" href="{{ route('from.contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link homebtn  {{ Route::currentRouteName() == "blog.add" ? 'active' : '' }}" href="{{ route('blog.add') }}">Add new post</a>
        </li>
        </ul>      
          <a class="btn btn-primary btn-lg active"  href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
          </form>
      </div>
    </nav>
  
    @yield("content")

    @yield('overzicht')

    @yield('projecten')

    @yield('article')

    {{-- @yield('project_detail') --}}
    {{-- @yield('socials') --}}
    {{-- @yield('question')
    @yield('review') --}}
    @yield('blog')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
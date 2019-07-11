<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Feed</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <style>
        #newsLink {
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="width: 100%;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="newsLink" class="nav-link" href="/news">News List<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{$article->title}}</h2>
                    <p class="blog-post-meta">{{$article->date_created}} by <a href="#">{{$author->username}}</a></p>
                    {{$article->content}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
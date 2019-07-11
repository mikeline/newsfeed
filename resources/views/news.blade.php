<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Feed</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            #homeLink {
                font-size: 1.5em;
            }

            .news-title {
                font-family: Nunito, sans-serif;
                color: #1d2124;
                font-size: 1.5em;
            }

            .news-desc {
                font-family: Nunito, sans-serif;
                color: #383d41;
            }

            .news-card {
                padding: 7px;
                -webkit-box-shadow: 0 10px 6px -6px #777;
                -moz-box-shadow: 0 10px 6px -6px #777;
                box-shadow: 0 10px 6px -6px #777;
            }

        </style>
    </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="width: 100%;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a id="homeLink" class="nav-link" href="/">Home<span class="sr-only"></span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- News -->
        @foreach($articles as $article)
            <div class="container news-container">
                <div class="col-1 col-sm-2 col-md-6 col-lg-8" style="margin-bottom: 10px;">
                    <div class="card news-card">
                        <a href={{ url('news/post'.$article->id) }}><img src="{{asset("images/preview/{$article->photo}.png")}}" alt="" height="10%" width="10%"></a>
                        <a href={{ url('news/post'.$article->id) }}><h5 class="news-title">{{$article->title}}</h5></a>
                        <p class="news-desc">{{$article->desc}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </body>
</html>
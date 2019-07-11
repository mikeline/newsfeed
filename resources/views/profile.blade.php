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
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        #homeLink {
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="width: 100%;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="homeLink" class="nav-link" href="/">Home<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="well profile">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-8">
                            <h2>{{$news_user->first_name}} {{$news_user->last_name}} {{$news_user->middle_name}}</h2>
                            <p><strong>Username: </strong> {{$news_user->username}} </p>
                            <p><strong>Email: </strong> {{$news_user->email}} </p>
                            <p><strong>Occupation: </strong> {{$news_user->occupation}} </p>
                            <p><strong>Birth Date: </strong> {{$news_user->birth_date}} </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <figure>
                                <img src="{{asset("images/profile/{$news_user->photo}")}}" alt="" class="img-circle img-responsive">
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
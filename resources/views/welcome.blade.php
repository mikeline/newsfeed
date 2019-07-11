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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .auth-item {
                font-size: 15px;
                font-weight: 900;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .profile-item {
                font-size: 15px;
                font-weight: 900;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="width: 100%;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if (session()->has('user_id'))
                        <li class="nav-item auth-item">
                            <a class="nav-link" href="/logout_news_user">Logout<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item profile-item">
                            <a class="nav-link" href="/profile">Profile<span class="sr-only"></span></a>
                        </li>
                    @else
                        <li class="nav-item auth-item">
                            <a class="nav-link" href="/login_news_user">Login<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item auth-item">
                            <a class="nav-link" href="/register_news_user">Register<span class="sr-only"></span></a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    News Feed
                </div>

                <div class="links">
                    <a href="/news">What's new?</a>
                </div>
            </div>
        </div>
    </body>
</html>

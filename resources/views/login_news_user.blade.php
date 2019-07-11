<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Login Form -->
            <form method="post" action="/authenticate">
                <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" required>
                <input style="-webkit-text-security: disc !important;" type="text" id="password" name="psw" placeholder="password" required>

                <!-- Google reCaptcha -->
                @if(env('GOOGLE_RECAPTCHA_KEY'))
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-1 g-recaptcha-box">
                            <div class="g-recaptcha"
                                 data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                            </div>
                        </div>
                    </div>
                @endif

                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Home Link -->
            <div id="formFooter">
                <a class="underlineHover" href="/">Home</a>
            </div>

        </div>
    </div>
</body>
</html>
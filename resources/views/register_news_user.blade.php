<html>
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        #homeLink {
            font-size: 1.5em;
            color: #5a6268;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form class="form-horizontal" action='/add_user' method="POST" enctype="multipart/form-data">
        <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <fieldset>
            <div id="legend">
                <legend class="" >Register</legend>
            </div>
            <div class="control-group">
                <!-- Username -->
                <label class="control-label"  for="username">Username</label>
                <div class="controls">
                    <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                    <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
            </div>

            <div class="control-group">
                <!-- First name -->
                <label class="control-label"  for="first_name">First name</label>
                <div class="controls">
                    <input type="text" id="first_name" name="first_name" placeholder="" class="input-xlarge">
                    <p class="help-block">Enter your first name</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Last name -->
                <label class="control-label"  for="last_name">Last name</label>
                <div class="controls">
                    <input type="text" id="last_name" name="last_name" placeholder="" class="input-xlarge">
                    <p class="help-block">Enter your last name</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Middle name -->
                <label class="control-label"  for="middle_name">First name</label>
                <div class="controls">
                    <input type="text" id="middle_name" name="middle_name" placeholder="" class="input-xlarge">
                    <p class="help-block">Enter your middle name, if you have it</p>
                </div>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                    <p class="help-block">Please provide your E-mail</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="psw" placeholder="" class="input-xlarge">
                    <p class="help-block">Password should be at least 4 characters</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password -->
                <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                <div class="controls">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                    <p class="help-block">Please confirm password</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Birth Date -->
                <label class="control-label"  for="password_confirm">Birth Date</label>
                <div class="controls">
                    <input type="date" id="birth_date" name="birth_date" placeholder="" class="input-xlarge">
                    <p class="help-block">Enter your birth date</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Occupation -->
                <label class="control-label"  for="occupation">Occupation</label>
                <div class="controls">
                    <input type="text" id="occupation" name="occupation" placeholder="" class="input-xlarge">
                    <p class="help-block">Enter your occupation</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Photo -->
                <label class="control-label"  for="file_upload">Photo</label>
                <div class="controls">
                    <input type="file" id="file_upload" name="photo_upload" placeholder="" class="input-xlarge">
                    <p class="help-block">Upload your profile photo</p>
                </div>
            </div>

            @if(env('GOOGLE_RECAPTCHA_KEY'))
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-1 g-recaptcha-box">
                        <div class="g-recaptcha"
                             data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                        </div>
                    </div>
                </div>
            @endif

            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success">Register</button>
                </div>
            </div>
        </fieldset>
    </form>
    <a id="homeLink" href="/">Home</a>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 7/11/2019
 * Time: 10:30 AM
 */

namespace App\Http\Controllers;

use App\NewsUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function addUser(Request $request)
    {
        // get credentials
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('psw');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $middle_name = $request->input('middle_name');
        $birth_date = $request->input('birth_date');
        $birth_date = str_replace('.', '-', $birth_date);
        $occupation = $request->input('occupation');
        $profile_photo = $request->file('photo_upload');


        // check if reCaptcha has been validated by Google
        $secret = env('GOOGLE_RECAPTCHA_SECRET');
        $captchaId = $request->input('g-recaptcha-response');

        // sends post request to the URL and tranforms response to JSON
        $responseCaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$captchaId));

        // allow query to database if reCaptcha is validated
        if($responseCaptcha->success == true)
        {
            // move uploaded file into directory
            $temp = explode(".", $profile_photo->getClientOriginalName());
            $new_file_name = 'profile' . round(microtime(true)) . '.' . end($temp);
            $path = public_path();
            $profile_photo->move($path . '/images/profile', $new_file_name);

            $data = array('email'=>$email,'username'=>$username,
                'password'=>$password,'first_name'=>$first_name,
                'last_name'=>$last_name,
                'middle_name'=>$middle_name,
                'birth_date'=>$birth_date,
                'occupation'=>$occupation,
                'photo'=>$new_file_name
            );
            DB::table('news_users')->insert($data);
        }
        return redirect('/');

    }
}
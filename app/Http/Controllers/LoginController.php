<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 7/11/2019
 * Time: 7:04 AM
 */

namespace App\Http\Controllers;

use App\NewsUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;



class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // get credentials
        $username = $request->input('username');
        $password = $request->input('psw');

        // check if reCaptcha has been validated by Google
        $secret = env('GOOGLE_RECAPTCHA_SECRET');
        $captchaId = $request->input('g-recaptcha-response');

        // sends post request to the URL and tranforms response to JSON
        $responseCaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$captchaId));

        // allow query to database if reCaptcha is validated
        if($responseCaptcha->success == true)
        {
            $result = DB::table('news_users')->where('username', '=', $username)->where('password', '=', $password)->get()->first();
            if ($result)
            {
                session(['user_id' => $result->id,
                    'username' => $result->username,
                    'email' => $result->email]);
                echo 'Successfully logged in';
                return redirect('/');
            }
            else
            {
                return redirect("/login_news_user");
            }
        }
        else
        {
            return redirect("/login_news_user");
        }

    }
    public function logout()
    {
        session()->forget(['user_id', 'username', 'email']);
        return redirect('/');
    }
}
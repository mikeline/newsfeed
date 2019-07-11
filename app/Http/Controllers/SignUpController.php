<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class SignUpController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/sign_up?username={username}&password={password}&email={email}
     * &first_name={first_name}&last_name={last_name}&middle_name={middle_name}&occupation={occupation}
     * &birth_date={birth_date}",
     *     summary="Sign up",
     *     tags={"SignUp"},
     *     @SWG\Parameter(
     *         name="username",
     *         in="path",
     *         description="Username",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="password",
     *         in="path",
     *         description="Password",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="email",
     *         in="path",
     *         description="Email",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="first_name",
     *         in="path",
     *         description="First name",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="last_name",
     *         in="path",
     *         description="Last name",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="middle_name",
     *         in="path",
     *         description="Middle name",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="occupation",
     *         in="path",
     *         description="Occupation",
     *         required=false,
     *         type="string",
     *     ),
     *     @SWG\Parameter(
     *         name="birth_date",
     *         in="path",
     *         description="Birth date",
     *         required=true,
     *         type="string",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="string",
     *             @SWG\Items(ref="#/definitions/SignUp")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Failed to sign up",
     *     ),
     * )
     */
    public function sign_up(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $middle_name = $request->middle_name;
        $occupation = $request->occupation;
        $birth_date = $request->birth_date;

        $data = array('email'=>$email,'username'=>$username,
            'password'=>$password,'first_name'=>$first_name,
            'last_name'=>$last_name,
            'middle_name'=>$middle_name,
            'birth_date'=>$birth_date,
            'occupation'=>$occupation,
        );
        $result = DB::table('news_users')->insert($data);

        if ($result)
        {
            return 'Successfully signed up';
        }
        else
        {
            return 'Failed to sign up';
        }

    }
}

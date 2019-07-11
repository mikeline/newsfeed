<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AuthorizationController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/authenticate?username={username}&password={password}",
     *     summary="Authorization",
     *     tags={"Authorization"},
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
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Authorization")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Failed to authenticate",
     *     ),
     * )
     */
    public function authenticate(Request $request)
    {

        $result = DB::table('news_users')->where('username', '=', $request->username)
            ->where('password', '=', $request->password)->get()->first();
        $data = [];
        if ($result)
        {
            $token = Hash::make($request->password);
            session(['user_id' => $result->id,
                'username' => $result->username,
                'email' => $result->email]);
            $data = array($token => ['user_id' => $result->id,
                'username' => $result->username,
                'email' => $result->email]);

        }
        return $data;

    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

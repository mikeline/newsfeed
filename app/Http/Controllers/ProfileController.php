<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\NewsUser;

class ProfileController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/profile/{profile_id}",
     *     summary="Profile",
     *     tags={"Profile"},
     *     @SWG\Parameter(
     *         name="profile_id",
     *         in="path",
     *         description="Profile ID",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Profile")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Failed to get profile",
     *     ),
     * )
     */
    public function getProfile(Request $request)
    {
//        $data = NewsUser::select('username', 'first_name', 'last_name', 'middle_name', 'email',
//            'occupation', 'birth_date')->where('id', '=', $request->input('profile_id'))->get();
        $data = NewsUser::find($request->profile_id);
        return $data->toJSON(JSON_PRETTY_PRINT);
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

<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;
use DB;

class PostsController extends Controller
{
    /**
     * @SWG\Get(
     *     path="/api/posts",
     *     summary="Get list of news posts",
     *     tags={"Posts"},
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Post")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function getAllPosts()
    {
        $posts = Article::all();
        return $posts->toJson(JSON_PRETTY_PRINT);
    }
    public function index()
    {
        //
    }

    /**
     * @SWG\Get(
     *     path="/api/posts/{post_id}",
     *     summary="Get blog post by id",
     *     tags={"Posts"},
     *     description="Get news post by id",
     *     @SWG\Parameter(
     *         name="post_id",
     *         in="path",
     *         description="Post id",
     *         required=true,
     *         type="integer",
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(ref="#/definitions/Post"),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Post is not found",
     *     )
     * )
     */
    public function getPost(Request $request)
    {
        $post = Article::find($request->post_id);
        return $post->toJSON(JSON_PRETTY_PRINT);
    }

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

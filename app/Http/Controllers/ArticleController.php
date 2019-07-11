<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 7/11/2019
 * Time: 6:25 AM
 */

namespace App\Http\Controllers;

use App\Article;
use App\NewsUser;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    function getPost($id)
    {

        $article = Article::find($id);
        $author = NewsUser::find($article->news_users_id);

        return view('detail')->with(['article' => $article, 'author' => $author]);

    }
}
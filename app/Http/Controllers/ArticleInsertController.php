<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 7/11/2019
 * Time: 4:50 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ArticleInsertController extends Controller
{
    public function insertform(){
        return view('article_create');
    }
    public function insert(Request $request){
        $title = $request->input('title');
        $desc = $request->input('desc');
        $content = $request->input('content');
        $news_users_id = $request->input('news_users_id');
        $photo = $request->input('photo');
        $date_created = now();
        $data = array('title'=>$title,'desc'=>$desc,
            'content'=>$content,'news_users_id'=>$news_users_id,
            'photo'=>$photo,
            'date_created'=>$date_created,
        );
        DB::table('articles')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert_article">Click Here</a> to go back.';
    }
}
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\NewsUser;
use App\Article;
use \Illuminate\Support\Facades\View;

# Home page
Route::get('/', function () {
    return view('welcome');
});

# Displaying the latest news
Route::get('/news', function () {

    # Select 10 latest news posts
    $articles = Article::orderBy('date_created', 'desc')->limit(10)->get();

    return View::make('news')->with('articles', $articles);
});

# Moving to concrete article
Route::get('/news/post{id}', 'ArticleController@getPost');

# Profile page
Route::get('/profile', function () {
    $news_user = NewsUser::where('id', '=', session('user_id'))->get()->first();
    return view('profile')->with('news_user', $news_user);
});

# Login
Route::get('/login_news_user', function () {
    return view('login_news_user');
});

Route::post('/authenticate', 'LoginController@authenticate');

# Log out
Route::get('/logout_news_user', 'LoginController@logout');

# Register
Route::get('/register_news_user', function () {
    return view('register_news_user');
});

Route::post('/add_user', 'RegisterController@addUser');

# News Post Api
Route::get('api/posts', 'PostsController@getAllPosts');
Route::get('api/posts/{post_id}', 'PostsController@getPost');

# Profile Api
Route::get('api/profile/{post_id}', 'ProfileController@getProfile');

# Authorization Api
Route::get('api/authenticate?username={username}&password={password}', 'AuthorizationController@authenticate');

# Registration Api
Route::get('api/sign_up?username={username}&password={password}&email={email}
     &first_name={first_name}&last_name={last_name}&middle_name={middle_name}&occupation={occupation}
     &birth_date={birth_date}', 'SignUpController@sign_up');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Insert new user
Route::get('insert_user','NewsUserInsertController@insertform');
Route::post('create_user','NewsUserInsertController@insert');

# Insert new article
Route::get('insert_article','ArticleInsertController@insertform');
Route::post('create_article','ArticleInsertController@insert');



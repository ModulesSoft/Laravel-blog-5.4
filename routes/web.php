<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Post;
Route::get('/', function () {
//    $posts = Post::all();
    return view('welcome');//, compact('posts'));
});

Route::get('/home', 'HomeController@index');

Auth::routes();
Route::resource('/posts', 'PostsController');

//Route::group(['middleware' => 'auth'], function () {
//
//    Route::resource('posts', 'PostsController');
//});




<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/post/{id}', 'PostController@show');

//Route::resource('post', 'PostController');

Route::get('/contact', 'PostController@contact');


Route::get('post/{id}/{name}/{password}', 'PostController@show_post');
//
//Route::get('/about', function () {
//    return 'About';
//});
//
//
//Route::get('/contact', function () {
//    return 'Contact';
//});
//
//
//Route::get('/post/{id}/{name}', function ($id, $name) {
//    return 'Post ' . $id . ' name ' .$name ;
//});
//
//
//Route::get('/admin/posts/example', array('as' => 'admin.home', function () {
//    $url = route('admin.home');
//
//    return 'this is URL' . $url;
//}));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

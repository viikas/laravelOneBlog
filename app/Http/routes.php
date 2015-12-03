<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact','PagesController@contact');


Route::get('admin/', function () {
    return view('admin/index');
});

//REST API for videos
Route::resource('videosAdmin','VideosController');

//REST API for Commments
Route::resource('commmentsAdmin','CommentsController');
//REST API for Blogs
Route::resource('blogsAdmin','BlogsController');


// Authentication routes...
Route::get('auth/login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout'] );

// Registration routes...
Route::get('auth/register',['as'=>'register','uses'=> 'Auth\AuthController@getRegister']);
Route::post('auth/register','Auth\AuthController@postRegister');
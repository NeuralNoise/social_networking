<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$posts = Post::with('user')->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

	return View::make('index')->withPosts($posts);
});


Route::get('registration', ['as' => 'users.registration', 'uses' => 'UsersController@getRegistration']);

Route::post('registration', ['as' => 'users.registration', 'uses' => 'UsersController@postRegistration']);

Route::get('signin', ['as' => 'users.signin', 'uses' => 'UsersController@getSignin']);

Route::post('signin', ['as' => 'users.signin', 'uses' => 'UsersController@postSignin']);

Route::get('logout', ['as' => 'users.logout', 'uses' => 'UsersController@logout']);

Route::post('post_status', ['as' => 'users.post_status', 'uses' => 'PostsController@store']);

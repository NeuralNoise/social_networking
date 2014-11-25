<?php

class UsersController extends \BaseController {

	function getRegistration()
	{
		return View::make('registration');
	}

	function postRegistration()
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->save();

		return Redirect::to('signin');
	}

	function getSignin()
	{
		return View::make('signin');
	}

	function postSignin()
	{
		$credentials = [
			"email" => Input::get('email'),
			"password" => Input::get('password')
		];

		if( Auth::attempt($credentials) ) {
			return Redirect::to('/');
		}

		 return Redirect::back()->with('flash_message', 'Could not login using the given credentials');
	}

	function logout()
	{
		Auth::logout();

		return Redirect::to('signin');
	}

}
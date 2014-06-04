<?php

class LoginController extends BaseController {

	public function getLogin()
	{
		return View::make('auth.login')->with('page', 'login');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password), true))
		{
		    return Redirect::intended('admin');
		}

		return View::make('auth.login')
					 ->with('page', 'login')
					 ->with('message', 'You could not be logged in');
	}

	public function getChecklogin()
	{
		return json_encode(Auth::check());
	}

	public function getCreate()
	{
		return View::make('auth.createuser')->with('page', 'createuser');
	}

	public function postCreate()
	{
		$user = Input::all();
		
		$rules = array(
			'username' => 'required|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6',
			'authcode' => 'required|in:'. Config::get('auth.key')
		);

		$validator = Validator::make(
			$user,
			$rules
		);

		if($validator->passes())
		{
			$password = Hash::make($user['password']);

			$newuser = new User;

			$newuser->id = uniqid();
			$newuser->username = $user['username'];
			$newuser->email = $user['email'];
			$newuser->password = $password;

			$newuser->save();

			return Redirect::to('user/login');
		}

		$messages = $validator->messages();
		return View::make('auth.createuser')
			   ->with('page', 'createuser')
		       ->with('messages', $messages->all());
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}
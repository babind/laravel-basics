<?php

class SessionsController extends \BaseController{


	public function create()

	{

		return View::make('sessions.create'); 
	}

	public function store()

	{
		if(Auth::attempt(Input::only('email','password')))
		{
			return"Welcome". Auth::user()->username;
		}
		return View::make('sessions.destroy');
	}

	public function destroy()
	{
		Auth::logout();
		
		return View::make('users.create');	
	}
}


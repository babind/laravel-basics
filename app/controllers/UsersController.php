<?php

class UsersController extends \BaseController {
 

 	public function index()
 	{

 	$users=User::all();

 	return View::make('users.index',['users'=>$users]);
 	} 

 	public function show($username)

 	{

 		$user=User::whereUsername($username)->first();

 		return View::make('users.show',['user'=>$user]);

 	}

 	public function create()
 	{
 		//return'show form to create user';
 		return View::make('users.create');
 	}

 	public function store()
 	{

 	
 		//return 'create the new user given the post data';
 		//return Input::all();
 		//return Input::get('username');
 		// for Validation
 		// $validation=Validator::make(Input::all(),User::$rules);
 		// if($validation->fails()) 
 		// 	{
 		// 		//return 'failed validation';
 		// 		return Redirect::back()->withInput()->withErrors($validation->messages());
 		// 	}
 		// $user= new User;

 		// $user->username=Input::get('username');
 		// $user->password=Hash::make(Input::get('password'));
 		// $user->save();
 		// return Redirect::route('users.index');
 		if(!User::isValid(Input::all()))
 		{
 		
 			return Redirect::back()->withInput()->withErrors(User::$errors);
 		
 		}
 		// $validation=Validator::make(Input::all(),User::$rules);
 		
 		$user= new User;

 		$user->username=Input::get('username');
 		$user->password=Hash::make(Input::get('password'));
 		$user->save();

 		return Redirect::route('users.index');
 	}

}
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
Route::resource('users','UsersController');
//Route::get('users','UsersController@index');
//Route::get('users/{username}','UsersController@show');
// Route::get('users',function()
// {
// 	$users=User::all();

// 	//return View::make('users/index')->with('users',$users);
// 	//or 
// 	//return View::make('users/index')->withUsers($users);
// 	//or
// 	return View::make('users/index',['users'=>$users]);
// });

// Route::get('users/{username}',function($username)
// {
// 	$user=User::whereUsername($username)->first();// select * from users where username =USERNAME LIMIT 1
// 	return View::make('users/show',['user'=>$user]);
// });


// Route::get('/', function() 

// {
// 	// $users=DB::table('user')->get();
// 	// return $users;
// 	// dd($users);// die(var_dump($user));
// 	// $users=DB::table('users')->where('username','!=','jeffreyWay')->get();
// 	// return $users;
// 	// $users=user::where('username','!=','jeffreyway')->get();
// 	// return $users;

// 	// $user=new User;
// 	// $user->username='NewUser';
// 	// $user->password=Hash::make('password');
// 	// $user->save();
// 	// //$user=DB::insert("insert into user (username,password) VALUES(:username,:password)");
// 	// return User::all();
// 	// User::create([
// 	// 	'username'=>'AnotherUser',
// 	// 	'password'=>Hash::make('1234')
// 	// 	]);
// 	// return User::all();
// 	//  to update the user using orm in laravel.
// 	// 	$user=User::find(2);
// 	// 	$user->username='UpdatedName';
// 	// 	$user->save();
	
// 	// 	return User::all();

// 	// To delete the user having the id of that 
// 	// $user=User::find(1);
// 	// $user->delete();
// 	// return User::all();
// 	// to get user by user by descending order
// 	// return User::orderBy('username','des')->get();
// 	// return User::orderBy('username','asc')->take(2)->get();
// });

 
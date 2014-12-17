<?php



Route::get('/',function()
{
	return View::make("home");
});
Route::resource('sessions','SessionsController');

Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
 	
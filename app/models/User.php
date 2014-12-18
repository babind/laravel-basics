<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface, RemindableInterface {
	
	use UserTrait, RemindableTrait;
	 public $timestamps=false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	
	protected $fillable=['username','password'];
	

	public static  $rules=[
	'username'=>'required',
	'password'=>'required'
	];
	 public $errors;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $table = 'users';
	 protected $hidden = array('password', 'remember_token');

	//  public function isValid()
	// {
	// 	//$validation=Validator::make($data,static::$rules);
	// 	$validation=Validator::make(Input::all(),User::$rules);
	// 	if($validation->passes()) return true;
	// 	static::$errors=$validation->messages();
	// 	return false; 
	// } 

	 public   function isValid()
	 	
	 	{
	
	 	$validation=Validator::make($this->attributes,static::$rules);
		if($validation->passes())
		{
			return true;
		}
		$this->errors=$validation->messages();
	 	return false;
	 }
}
 
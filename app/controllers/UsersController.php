 <?php 
class UsersController extends \BaseController {
 
	protected $user;

	public function __construct(User $user)

	{

		$this->user=$user;
	}

 	public function index()
 	{
 	$users=$this->user->all();

 	return View::make('users.index',['users'=>$users]);

 	} 


 	public function show ($username)
 	
 	{
 	
 		$user=$this->user->whereUsername($username)->first();

 		return View::make('users.show',['user'=>$user]);
 	}

 	public function create()
 	
 	{
 		
 		return View::make('users.create');
 	}

 	public function store()
 	
 	{
 			if(! User::isValid(Input::all()))
 		 	{
 		 		return Redirect::back()->withInput()->withErrors(User::$errors);
 		 		}
 		 		$user= new User;

 		$user->username=Input::get('username');
 			$user->password=Hash::make(Input::get('passwpord'));
 			$user->save();

 		
 		return Redirect::route('users.index');
 	}

 	public function remind()
 	{
 		$validation=Validator::make(
 			array(
 				'name'=>Input::get('name'),
 				'email'=>Input::get('email'),
 				),
 			array(
 				'name'=>array('required','alpha_dash'),
 				'email'=>array('required','email'),
 				)
 			);
 		if($validation->fails()){
 			$errors=$validation->messages();

 		}
 		/* Display errors
 		 */
 		if(!empty($errors)){
 			foreach($errors->all() as $error){
 				echo '<div class="error">'.$error.'<div>';
 			}
 		}
 	}

}
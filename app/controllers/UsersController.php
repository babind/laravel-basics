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
 		$this->user->fill(Input::all());
 		 return $this->user->toArray();
 			if(!$this->user->isValid($input=Input::all()))
 		 	{
 		 		return Redirect::back()->withInput()->withErrors($this->user->errors);
 		 		}
 		 	$this->user->create($input);

 		
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
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
 		$input=Input::all();
 		if( !$this->user->fill($input)->isValid())
 		//return $this->user->toArray();
 		//if(! $this->user->isValid($input=Input::all()))
 		{
 		
 		return Redirect::back()->withInput()->withErrors($this->user->errors);
 		
 		}
 		// if($validation->fails())  
 		// {
 		
 		// 	return Redirect::back()->withInput()->withErrors($validation->messages());
 		 
 		// } 
 		//$this->user->create($input);
 		$this->user->save();
 		return Redirect::route('users.index');
 	}
}
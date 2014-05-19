<?php
 
use WebsiteModel\Storage\User\UserRepository as User;
 
class RegisterController extends BaseController {
 
  /**
   * User Repository
   */
  protected $user;
 
  /**
   * Inject the User Repository
   */
  public function __construct(User $user)
  {
    $this->user = $user;
  }
 
  public function index()
  {
    return View::make('register.index');
  }
 
  public function store()
  {
    $s = $this->user->create(Input::all());
 
    if($s->isSaved())
    {
/*       return Redirect::route('session.create')
		->with('flash', 'The new user has been created'); */
		
		// Try to log the user in
		Auth::login($s);
		
		if (Auth::check())
		{
			return Redirect::intended('logged-in')
				->with('message', 'The new user has been created');
		}
		else
		{
			return Redirect::route('session.create')
				->with('flash', 'The new user has been created');
		}
    }
 
	return Redirect::route('register.index')
		->withInput()
		->withErrors($s->errors());
  } 
}
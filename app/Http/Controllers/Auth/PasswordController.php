<?php namespace IMSUR\Http\Controllers\Auth;

use IMSUR\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;

class PasswordController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Password Reset Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling password reset requests
	| and uses a simple trait to include this behavior. You're free to
	| explore this trait and override any methods you wish to tweak.
	|
	*/

	use ResetsPasswords;

	/**
	 * Create a new password controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\PasswordBroker  $passwords
	 * @return void
	 */
	//protected $redirect = 'admin';
	protected $redirectPath = 'admin';

	protected function resetPassword($user, $password){
		$user->password = $password;
		$user->save();
		Auth::login($user);
	}

	public function redirectPath(){
		if(property_exists($this, 'redirectPath')){
			return $this->redirectPath;
		}
		return property_exists($this, 'redirectTo') ? $this-> redirectTo:'/admin';
	}

	/*public function __construct(Guard $auth, PasswordBroker $passwords)
	{
		$this->auth = $auth;
		$this->passwords = $passwords;

		$this->middleware('guest');
	}*/



}

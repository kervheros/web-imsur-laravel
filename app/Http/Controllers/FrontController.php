<?php namespace IMSUR\Http\Controllers;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;
use IMSUR\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;


use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller {

  public function __construct(){
    $this->middleware('auth',['only'=>'admin']);
  }

   public function index(){
        return view('index');
   }

   public function cont(){
        return view('contacto');
   }

   public function reviews(){
        return view('reviews');
   }

   public function admin(){
        return view('admin.index');
   }

   public function log(){
     return view('auth.login');
   }

   public function create(){
     return view('auth.register');
   }

   public function store(UserCreateRequest $request){

       \IMSUR\User::create([
   			'name'=>$request['name'],
   			'email'=>$request['email'],
   			'password'=>$request['password'],
   		]);

   		return redirect('/login')->with('message','Usuario registrado correctamente');
  }

  /*public function register(){
    return view('auth.register');
  }*/

}

<?php namespace IMSUR\Http\Controllers;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;
use IMSUR\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;


use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Mail;

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

       $request['confirmation_code'] = str_random(25);
       \IMSUR\User::create([
         'ci'=>$request['ci'],
   			 'name'=>$request['name'],
   			 'direccion'=>$request['direccion'],
   			 'telefono'=>$request['telefono'],
   			 'email'=>$request['email'],
   			 'password'=>$request['password'],
   			 'path'=>$request['path'],
         'confirmed'=>$request['confirmed'],
         'confirmation_code' => $request['confirmation_code'],
   		]);

      Mail::send('emails.confirmation_code' , $request, function($message) use ($request){
        $message->to($request['email'], $request['name'])->subject('Por favor confirma tu correo');
      });
      return $user;

   		//return redirect('/login')->with('message','Usuario registrado correctamente');//
  }

  public function verify($code){
    $user = \IMSUR\User::where('confirmation_code', $code)->first();

    if(! $user){
      return redirect('/');
    }
    $user->confirmed = true;
    $user->confirmation_code = null;
    $user->save();

    return redirect('/login')->with('notification','Has confirmado correctamente tu correo !');
  }

}

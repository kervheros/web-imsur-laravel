<?php namespace IMSUR\Http\Controllers;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

  public function __construct(){
    $this->middleware('auth',['only'=>'admin']);
  }

   public function index(){
        return view('auth.login');
   }

   public function contacto(){
        return view('contacto');
   }

   public function reviews(){
        return view('reviews');
   }

   public function admin(){
        return view('admin.index');
   }

}

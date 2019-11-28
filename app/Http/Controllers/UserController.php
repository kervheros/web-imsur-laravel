<?php namespace IMSUR\Http\Controllers;

use IMSUR\Http\Requests;
use IMSUR\Http\Requests\UserUpdateRequest;
use IMSUR\Http\Requests\UserCreateRequest;
use IMSUR\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use IMSUR\User;

class UserController extends Controller {
	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin',['only'=>['create','edit']]);
		$this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
	}

	public function find (Route $route){
		$this->user = \IMSUR\User::find($route->getParameter('usuario'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$users=\IMSUR\User::Search($request->name)->orderBy('id','DESC')->paginate(8);
		//$users=\IMSUR\User::paginate(2);
		return view ('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserCreateRequest $request)
	{
		/*\IMSUR\User::create($request->all());
		return "listo";*/
		/**
		\IMSUR\User::create([
			'ci'=>$request['ci'],
			'name'=>$request['name'],
			'direccion'=>$request['direccion'],
			'telefono'=>$request['telefono'],
			'email'=>$request['email'],
			'password'=>$request['password'],
			'path'=>$request['path'],
			'cod_prov'=>$request['cod_prov'],

		]); */
		$usuarios = new User();

		$usuarios->ci = $request->input('ci');
		$usuarios->name = $request->input('name');
		$usuarios->direccion = $request->input('direccion');
		$usuarios->telefono = 	$request->input('telefono');
		$usuarios->email = $request->input('email');
		$usuarios->password = $request->input('password');

		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/',$filename);
			$usuarios->image = $filename;
		}else {
			return $request;
			$usuarios->image = '';
		}
		$usuarios->cod_prov = $request->input('cod_prov');

		$usuarios->save();

		return view ('usuario')->with('usuarios', $usuarios);

		/**
		return redirect('/usuario')->with('message','Usuario registrado correctamente'); */
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = \IMSUR\User::find($id);
		return view ('usuario.edit',['user'=>$user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserUpdateRequest $request)
	{
		$user = \IMSUR\User::find($id);
		$user->fill($request->all());
		$user->save();
		Session::flash('message','Usuario editado correctamente');
		return redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		\IMSUR\User::destroy($id);
		Session::flash('message','Usuario eliminado correctamente');
		return redirect::to('/usuario');
	}


	public function login(){
		return view('auth.login');
	}

}

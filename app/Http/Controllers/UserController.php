<?php namespace IMSUR\Http\Controllers;

use IMSUR\Http\Requests;
use IMSUR\Http\Requests\UserUpdateRequest;
use IMSUR\Http\Requests\UserCreateRequest;
use IMSUR\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users=\IMSUR\User::paginate(1);
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
		\IMSUR\User::create([
			'name'=>$request['name'],
			'email'=>$request['email'],
			'password'=>$request['password'],
		]);

		return redirect('/usuario')->with('message','store');
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

}

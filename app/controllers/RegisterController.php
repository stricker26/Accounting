<?php

class RegisterController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('accounting.register');
	}

	public function showDepartment()
	{

		return View::make('accounting.department');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$dept = DB::table('departments')->where('status', '=', '1')->lists('id','department');
		return View::make('accounting.register', array('dept' => $dept));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array(
			'name' 			=> "required|unique:employees,name,{Input::get('name')}",
			'email'			=>	"required|email|unique:employees,email,{Input::get('email')}",
			'contact'		=>	'required',
			'department'	=>	'required',
			'position'		=>	'required',
			'username'		=>	"required|unique:employees,username,{Input::get('username')}",
			'password'		=>	'required'	
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('register')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else{
			$register = new Employee;
			$register->username 	= Input::get('username');
			$register->name 		= Input::get('name');
			$register->email 		= Input::get('email');
			$register->mobile 		= Input::get('contact');
			$register->department	= Input::get('department');
			$register->position 	= INput::get('position');
			$register->save();

			$user = new Account;
			$user->username 	= Input::get('username');
			$user->password 	= Input::get('password');
			$user->save();

			return Redirect::to('register')
				->withInput(Input::except('password'))
				->with('flash_notice', 'Successfully Registered!');
		}
	}


	public function storeDepartment()
	{

		$rules = array(
			'department' => "required|unique:departments,department,{Input::get('department')}"
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('department')
				->withErrors($validator);
		}else{
			$dept = new Department;
			$dept->department 	= Input::get('department');
			$dept->status 		= '1';
			$dept->save();

			return Redirect::to('department')
				->with('flash_notice', 'Successfully Added!');
		}
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}



}

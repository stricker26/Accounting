<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// display main page admin.php
		return View::make('administrator.admin');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate
		//read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'menu_title'=> 'required',
			'data_desc'	=> 'required',
			'icon'		=> 'required',
			'page'		=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		//Process the data
		if($validator->fails()){
			return Redirect::to('administrator')
				->withErrors($validator);
		}else{
			//Store record
			$menu = new Menu;
			$menu->menu_title		= Input::get('menu_title');
			$menu->data_description	= Input::get('data_desc');
			$menu->icon 			= Input::get('icon');
			$menu->assign_page 		= Input::get('page');
			$menu->save();
			
			$post = new Post;
			$post->post = Input::get('data_desc');
			$post->save();

			//redirect
			Session::flash('message', 'Successfully created');
			return Redirect::to('administrator');

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

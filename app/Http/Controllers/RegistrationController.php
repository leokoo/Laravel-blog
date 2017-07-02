<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store()
	{
		// validate form
		$this->validate(request(), [
		'name' => 'required',
		'email' => 'required|email',
		'password' => 'required'
		]);

		// create & save the user
		$user = User::create(request(['name', 'email', 'password']));
		
		// sign user in
		auth()->login($user);

		// redirect to home page
		return redirect()->home();	
	}
}

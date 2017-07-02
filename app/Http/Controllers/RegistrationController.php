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

		// create & save the user

		// sign user in

		// redirect to home page
	}
}

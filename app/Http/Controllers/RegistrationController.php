<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;

class RegistrationController extends Controller
{
	public function create()
	{
		return view('registration.create');
	}

	public function store()
	{
		$this->validate(request(), [
		'name' => 'required',
		'email' => 'required|email',
		'password' => 'required|confirmed'
		]);

		$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')), //<==encrypt here
        ]);
		
		auth()->login($user);

		\Mail::to($user)->send(new Welcome);

		return redirect()->home();	
	}
}

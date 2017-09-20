<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller

{
	public function __construct(){
		$this->middleware('guest');
    }
    
	public function index()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'country' => 'required',
            'email' => 'required|email|unique:users', 
            'password' => 'required|confirmed',
        ]);
        $user = new User;
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->email = request('email');
        $user->company = request('company');
        $user->country = request('country');
        $user->password = bcrypt(request('password'));
        $user->save();
        auth()->login($user);
        return redirect('/home');
    }
}
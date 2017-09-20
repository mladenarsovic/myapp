<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct(){

		$this->middleware('guest' , ['except' => 'destroy']);
    }
    
	public function destroy(){

        auth()->logout();
        
		return redirect('/home');
    }
    
    public function index(){
    
        return view('login.login');
    }

    public function store(){
    
        $this->validate(request(),[
    		'email' => 'required|email',
    		'password' => 'required'
        ]);
        
    	if(!auth()->attempt(request(['email','password']))){
    		return back()->withErrors([
    			'messages' => 'Password or email are not correct!'
    		]);
        }
        
    	return redirect('/home');	
    }
}
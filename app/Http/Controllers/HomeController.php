<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;
use App\Http\Requests;

use App\User;

class HomeController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'destroy'] ]);
    }

    public function index() 
    {
        $users =  User::all();

        return view('home', compact('users'));
    }

    public function show() 
    {
        return view('home-details');
    }

    public function destroy()
    {
        $usersChecked = Input::get('userIds');
        // dd($usersChecked);

        if(is_array($usersChecked))
        {
          
        }

        Artisan::call('delete:users');
       
        return redirect('home'); 
    }

    public function filterByEmail($email){
          
        $users = User::where('email','like','%'.$email)->get();
        return $users;
    }
}

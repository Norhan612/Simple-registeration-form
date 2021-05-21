<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\User;
use App\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        //validation

        $val = $request->validate([
            "email"    => "required|email",
            "password" => "required",
        ]);

        //login

        $user_data = $request->only("email", "password");

        if(Auth::attempt($user_data))
        {
           // Session::flash('message', 'User Is Login');
            //return view("index");
            return redirect("/index");
        }
        else
        {
             Session::flash('message', 'User Is Not Registered');
            return redirect("/register");
        }
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
          //validation

          $val = $request->validate([
            "name"     => "required",
            "email"    => "required|email|unique:users,email",
            "password" => "required|confirmed|min:5",
        ]);

        //insert

        $user = new User();

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = hash::make($request->password);

        if($user->save())
        {
            Session::flash('message', 'User Is Created Successfully');
            return redirect("/login");
        }
        else
        {
            
            Session::flash('message', 'User Not Created'); 
            return redirect("/register");
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }

    public function showAllUsers()
    {
        $users = User::all();

        return view('index', compact('users'));
    }
}

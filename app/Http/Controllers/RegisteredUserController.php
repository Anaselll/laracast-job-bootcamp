<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
    $request->validate([

      
      "first_name"=>"required|string",
      "last_name"=>"required|string",
      "email"=>"required|email|unique:users",
      "password"=>"required|string",
      "password_confirmation"=>"required|string|same:password"
     ]);
     $user = new User();
     $user->first_name = $request->first_name;
     $user->last_name = $request->last_name;
     $user->email = $request->email;
     $user->password =$request->password;
     $user->save();
     Auth::login($user);
     return redirect('/');
    }
}

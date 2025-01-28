<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
   public function create(){
    return view('auth.login');
   } public function store(){
 $validated=request()->validate([
   'email' => 'required|email',
   'password' => 'required',
 ]);
 if (!Auth::attempt($validated)){
   throw ValidationException::withMessages([
      'email' => ['The provided credentials are incorrect'],
   
   ]);

 }
 request()->session()->regenerate();
 return redirect("/");
   }
   public function destroy(){
Auth::logout();
return redirect("/");
   }
}

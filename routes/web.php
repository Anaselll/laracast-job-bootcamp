<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
Route::get('/', function () {
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});



Route::resource("jobs",JobController::class); 


Route::get("/register",[RegisteredUserController::class,"create"]);
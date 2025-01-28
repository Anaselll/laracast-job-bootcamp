<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});



Route::get('jobs', [JobController::class, 'index']);
Route::get('jobs/{job}', [JobController::class, 'show'])->where("job","[0-9]+");

Route::middleware('auth')->group(function() {
    Route::get('jobs/create', [JobController::class, 'create']);
    Route::post('jobs', [JobController::class, 'store']);
    Route::get('jobs/{job}/edit', [JobController::class, 'edit'])->middleware("can:edit,job");
    Route::put('jobs/{job}', [JobController::class, 'update']);
    Route::delete('jobs/{job}', [JobController::class, 'destroy']);
});

Route::get("/register",[RegisteredUserController::class,"create"])->name('register');
Route::post("/register",[RegisteredUserController::class,"store"]);
Route::get("/login",[SessionController::class,"create"])->name('login');
Route::post("/login",[SessionController::class,"store"]);
Route::post("/logout",[SessionController::class,"destroy"]);


Route::get("test",function(){
    $job=Job::first();
TranslateJob::dispatch($job);
    return "done";
});


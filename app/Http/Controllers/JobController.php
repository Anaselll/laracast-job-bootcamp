<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobs.index",[
            "jobs"=>Job::with("employer")->cursorPaginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
  return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validated= request()->validate([
        "title"=>"required",
        "salary"=>"required",
   ]);
 $job= Job::create([
    "employer_id"=>1,
    "title"=>$validated["title"],
    "salary"=>$validated["salary"],
  ]);
    Mail::to($job->employer->user)->queue(
        new JobPosted($job)
    );
  return redirect("/jobs");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
      return view("jobs.show",[
    "job"=>$job
]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
    
   
     
      return view("jobs.edit",[
    "job"=>$job
]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
           //authorize
  $validated= request()->validate([
        "title"=>"required",
        "salary"=>"required",
   ]);
$job->update([
 "employer_id"=>1,
    "title"=>$validated["title"],
    "salary"=>$validated["salary"]

]);
return redirect("/jobs");



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
   $job->delete();











return redirect("/jobs");



    }
}

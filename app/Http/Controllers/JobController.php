<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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
  Job::create([
    "employer_id"=>1,
    "title"=>$validated["title"],
    "salary"=>$validated["salary"],
  ]);
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

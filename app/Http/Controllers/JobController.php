<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        // $jobTypes = JobType::with(["job"])->get();
        // $jobs = Job::with(["job_type"])->get();
        return view('frontend.job_list');
    }


    public function apply_job()
    {
        $cv = request()->file("cv");
        $name_gen = hexdec(uniqid());
        $extension = strtolower($cv->getClientOriginalExtension());
        $cv_name = "$name_gen.$extension";
        $cv->move(public_path('company/jobs'), $cv_name);

        JobApplication::create([
            "applicant_name"    => request()->input("applicant_name"),
            "applicant_email"    => request()->input("applicant_email"),
            "Portfolio"    => request()->input("Portfolio"),
            "cv"    => $cv_name,
            "cover_letter"    => request()->input("cover_letter"),
            "user_id"    => request()->input("user_id"),
            "job_id"    => request()->input("job_id"),
            "company_id"    => request()->input("company_id"),
        ]);


        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('frontend.job_detail', compact("job"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
        return view('frontend.about');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
        //
    }
}

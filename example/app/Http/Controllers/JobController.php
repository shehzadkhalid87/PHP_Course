<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Home
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->Latest()->simplePaginate(3),
            'job' => null
        ]);

    }


    //create

    public function show($id)
    {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->get(),
            'job' => Job::with('employer')->find($id)
        ]);

    }

    //Home

    public function store()
    {
        // validation
        request()->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1

        ]);
        return redirect('/jobs');


    }

    //Create and Store

    public function create()
    {
        return view('jobs.create');

    }

    //Edit

    public function edit($id)
    {
        return view('jobs.edit', [
            'jobs' => Job::with('employer')->get(),
            'job' => Job::with('employer')->find($id)
        ]);

    }

    //Update
    public function updates(Job $job)
    {
        // Validate inputs
        request()->validate([
            'title' => ['required', 'min:5'],
            'salary' => ['required']
        ]);

        // Update the job
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        // Redirect to the updated job page
        return redirect('/jobs/' . $job->id);

    }

    //Delete
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');

    }
}

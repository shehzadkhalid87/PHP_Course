<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
//    $jobs = Job::all();
//    dd($jobs[0]->title);
    return view('home');
});

// create jobs
Route::get('/jobs/create', function () {
//    dd('create a  job.');
    return view('jobs.create');

});
Route::post('/jobs', function () {
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

});


// Show all jobs
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->Latest()->simplePaginate(3),
        'job' => null
    ]);
});

// Show single job
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->get(),
        'job' => Job::with('employer')->find($id)
    ]);
})->whereNumber('id');

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        'jobs' => Job::with('employer')->get(),
        'job' => Job::with('employer')->find($id)
    ]);
})->whereNumber('id');


//Update
Route::patch('/jobs/{job}', function (Job $job) {
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
});


// Delete also model binding
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');

});

Route::get('/contact', function () {
    return view('contact');
});

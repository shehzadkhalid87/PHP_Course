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


Route::get('/contact', function () {
    return view('contact');
});

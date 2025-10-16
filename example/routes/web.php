<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
//    $jobs = Job::all();
//    dd($jobs[0]->title);
    return view('home');
});

// List all jobs
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
        'job' => null
    ]);
});

// Show single job
Route::get('/jobs/{id}', function ($id) {
    return view('jobs', [
        'jobs' => Job::all(),
        'job' => Job::find($id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/{id?}', function ($id = null) {
    if ($id) {
        // Show a single job (if ID is provided)
        $job = Job::find($id);

        if (!$job) {
            abort(404, 'Job not found');
        }

        return view('jobs', [
            'jobs' => Job::all(),
            'job' => $job
        ]);
    }

    // Show all jobs (no ID)
    return view('jobs', [
        'jobs' => Job::all(),
        'job' => null
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

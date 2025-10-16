<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
            ['id' => 2, 'title' => 'Doctor', 'salary' => '$40,000'],
            ['id' => 3, 'title' => 'Software Engineer', 'salary' => '$20,000'],
        ];
    }
}


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/{id?}', function ($id = null) {

    // If an ID is provided → show one job
    if ($id) {
        $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404, 'Job not found');
        }

        return view('jobs', [
            'jobs' => Job::all(),  // keep full list available if needed
            'job' => $job     // single job to show
        ]);
    }

    // Otherwise → show all jobs
    return view('jobs', [
        'jobs' => Job::all(),
        'job' => null
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});

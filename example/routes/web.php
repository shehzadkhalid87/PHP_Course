<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
//    $jobs = Job::all();
//    dd($jobs[0]->title);
    return view('home');
});

// create jobs
Route::get('/jobs/create', [\App\Http\Controllers\JobController::class, 'create']);

//Store
Route::post('/jobs', [\App\Http\Controllers\JobController::class, 'store']);

// Show all jobs
Route::get('/jobs', [\App\Http\Controllers\JobController::class, 'index']);

// Show single job
Route::get('/jobs/{id}', [\App\Http\Controllers\JobController::class, 'show']);

// Edit
Route::get('/jobs/{id}/edit', [\App\Http\Controllers\JobController::class, 'edit']);


//Update
Route::patch('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'updates']);


// Delete also model binding
Route::delete('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});

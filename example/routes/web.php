<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Short-hand for static pages
Route::view('/', 'home');
Route::view('/contact', 'contact');

// Group routes with JobController
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs/all', 'index');         // Show all jobs
    Route::get('/jobs/create', 'create');     // Job creation form
    Route::post('/jobs', 'store');            // Handle job creation
    Route::get('/jobs/{id}', 'show');         // Show single job
    Route::get('/jobs/{id}/edit', 'edit');    // Edit form
    Route::patch('/jobs/{job}', 'updates');   // Update job
    Route::delete('/jobs/{job}', 'destroy');  // Delete job
});

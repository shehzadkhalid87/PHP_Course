<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Auth register

Route::get('/auth/register', [RegisterUserController::class, 'create']);
Route::post('/auth/register', [RegisterUserController::class, 'store']);

//Auth Login
Route::get('/auth/login', [SessionController::class, 'create'])->name('login');
Route::post('/auth/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

// Short-hand for static pages
Route::view('/', 'home');
Route::view('/contact', 'contact');

// Group routes with JobController
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');         // Show all jobs
    Route::get('/jobs/create', 'create');     // Job creation form
    Route::post('/jobs', 'store')->middleware('auth');            // Handle job creation
    Route::get('/jobs/{job}', [JobController::class, 'show']);
    Route::get('/jobs/{id}/edit', 'edit')->middleware(['auth', 'can:edit-job']);    // Edit form
    Route::patch('/jobs/{job}', 'updates');   // Update job
    Route::delete('/jobs/{job}', 'destroy');  // Delete job
});
//Route::resource('jobs', JobController::class)->only(['index']);
//Route::resource('jobs', JobController::class)->except(['index'])->middleware('auth');



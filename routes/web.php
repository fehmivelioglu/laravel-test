<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// * dd -> die and dump
Route::get('/', function () {
    return view('index', [
        'title' => 'Ana Sayfa',
        'description' => 'Bu sayfa ana sayfasıdır.',
        'jobs' => Job::all()
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about-static', function () {
    return 'About Page';
});

Route::get('/contact', function () {
    return ['foo' => 'bar'];
});

Route::get('/greeting', function () {
    return view('greetings')
        ->with('name', 'Victoria')
        ->with('occupation', 'Astronaut');
});

// Route::resource('jobs', JobController::class);

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'createPage');
    Route::get('/jobs/{id}', 'show');
    Route::post('/jobs', 'create');
});

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'createPage']);
// Route::get('/jobs/{id}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'create']);

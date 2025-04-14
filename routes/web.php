<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('index');
});

// * dd -> die and dump
Route::get('/j', function () {
    return view('jobs.index', [
        'title' => 'Ana Sayfa',
        'description' => 'Bu sayfa ana sayfasıdır.',
        'jobs' => Job::all()
    ]);
});

Route::get('/j/welcome', function () {
    return view('jobs.welcome');
});

Route::get('/j/about', function () {
    return view('jobs.about');
});

Route::get('/j/about-static', function () {
    return 'About Page';
});

Route::get('/j/contact', function () {
    return ['foo' => 'bar'];
});

Route::get('/j/greeting', function () {
    return view('jobs.greetings')
        ->with('name', 'Victoria')
        ->with('occupation', 'Astronaut');
});

Route::controller(JobController::class)->group(function () {
    Route::get('/j/jobs', 'index');
    Route::get('/j/jobs/create', 'createPage');
    Route::get('/j/jobs/{id}', 'show');
    Route::post('/j/jobs', 'create');
});

// Route::resource('jobs', JobController::class);
// Route::apiResource('/products', ProductController::class);

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'createPage']);
// Route::get('/jobs/{id}', [JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'create']);

// Route::match(['get', 'post'], '/', function () {} MULTIPLE METHODS
// Route::any('/', function () {}); ANY METHOD
// Route::redirect('/', '/home'); REDIRECT
// Route::view('/', 'welcome'); VIEW

// *
// Route::get('/product/{id}', function (string $id) {
//     return "Product ID is $id";
// })->whereNumber('id');
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return "Users Page";
//     });
// });
// Route::fallback(function () {
//     return "Page Not Found";
// });
// Route::controller(CarController::class)->group(function () {
//     Route::get('/car', 'index');
//     Route::get('/my-cars', 'myCars');
// });


Route::get('/c', function () {
    return view('cars.index');
});

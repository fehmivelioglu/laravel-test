<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

$jobs = [
    [
        'id' => 1,
        'title' => 'Laravel Developer',
        'location' => 'İstanbul',
    ],
    [
        'id' => 2,
        'title' => 'Flutter Developer',
        'location' => 'Ankara',
    ],
    [
        'id' => 3,
        'title' => 'React Developer',
        'location' => 'İzmir',
    ],
];

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

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(5);
    return view('jobs', [
        'title' => 'İş İlanları',
        'description' => 'Mevcut iş ilanları listesi',
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {
    $job = collect($jobs)->firstWhere('id', $id);

    if (!$job) {
        abort(404, 'İş ilanı bulunamadı.');
    }

    return view('job', [
        'job' => $job,
    ]);
});

Route::post('/jobs', function () {
    // dd(request()->all());

    request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'location' => ['required', 'min:3', 'max:255'],
    ]);

    Job::create([
        'title' => request('title'),
        'location' => request('location'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

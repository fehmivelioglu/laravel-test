<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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

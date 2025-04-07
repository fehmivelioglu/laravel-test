<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/greeting', function () {
    return view('greetings')
        ->with('name', 'Victoria')
        ->with('occupation', 'Astronaut');
});

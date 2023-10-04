<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/part2', function () {
    return view('part2Blade');
});

Route::get('/test', function () {
    return view('Test');
});
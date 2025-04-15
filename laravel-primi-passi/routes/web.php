<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/page-2', function () {
    return view('page2');
});

Route::get('/page-3', function () {
    return view('page3');
});

Route::get('/page-4', function () {
    return view('page4');
});

Route::get('/page-5', function () {
    return view('page5');
});

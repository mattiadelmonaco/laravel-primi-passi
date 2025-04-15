<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/page-2', function () {
    return view('page2');
})->name("page-2");

Route::get('/page-3', function () {
    return view('page3');
})->name("page-3");

Route::get('/page-4', function () {
    return view('page4');
})->name("page-4");

Route::get('/page-5', function () {
    return view('page5');
})->name("page-5");

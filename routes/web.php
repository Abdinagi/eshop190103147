<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/cv', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/exam', function () {
    return view('example');
});
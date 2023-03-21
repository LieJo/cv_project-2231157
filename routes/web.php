<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/studies', function () {
    return view('studies');
});

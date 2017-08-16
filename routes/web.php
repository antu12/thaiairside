<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/approvals', function () {
    return view('approvals');
});

Route::get('/capabilities', function () {
    return view('capabilities');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/management', function () {
    return view('manage');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/strength', function () {
    return view('strength');
});
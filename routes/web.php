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
    // include ('header.blade.php');
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/sale', function () {
    return view('buysalerent');
});
Route::get('/newsdetail', function () {
    return view('newsdetail');
});
Route::get('/rent', function () {
    return view('buysalerent');
});
Route::get('/agents', function () {
    return view('agents');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/buy', function () {
    return view('buysalerent');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/property-detail', function () {
    return view('property-detail');
});
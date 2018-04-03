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
    return view('home.index');
});
Route::get('pricing', function () {
    return view('pricing.index');
});
Route::get('why', function () {
    return view('why.index');
});
Route::get('security', function () {
    return view('security.index');
});
Route::get('services', function () {
    return view('services.index');
});
Route::get('about', function () {
    return view('about.index');
});
Route::get('contact', function () {
    return view('contact.index');
});
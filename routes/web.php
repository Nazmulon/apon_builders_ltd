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
    return view('welcome');
});
Route::get('/properties', function () {
    return view('layouts.frontend.properties');
});
Route::get('/agents', function () {
    return view('layouts.frontend.agents');
});
Route::get('/about', function () {
    return view('layouts.frontend.about');
});
Route::get('/contact', function () {
    return view('layouts.frontend.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


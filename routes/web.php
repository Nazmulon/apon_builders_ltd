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
Auth::routes();

//===================================front page controller ====================================
Route::get('/', 'indexController@index')->name('index');

Route::get('/properties', 'indexController@properties')->name('properties');

Route::get('/agents', 'indexController@agents')->name('agents');

Route::get('/about', 'indexController@about')->name('about');

Route::get('/contact', 'indexController@contact')->name('contact');

Route::get('/single_properties', 'indexController@single_properties')->name('single_properties');

Route::get('/single_agents', 'indexController@single_agents')->name('single_agents');

//===============================================Dashboard controller======================================
Route::get('/dashboard', 'DashboardController@index');

//===========================enail_number=================================================================
Route::resource('email_number','EmailNumberController');

// ===============================Admin Social link=======================================================
Route::resource('admin_social_link','AdminSocialController');

// ============================Logo=====================================================================

Route::resource('logo', 'LogoController');

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
Auth::routes(['register'=>false]);

//===================================front page controller ====================================
Route::get('/', 'indexController@index')->name('index');

Route::get('/properties', 'indexController@properties')->name('properties');

Route::get('/our_agents', 'indexController@agents')->name('agents');

Route::get('/about', 'indexController@about')->name('about');

Route::get('/contact', 'indexController@contact')->name('contact');
Route::post('/contact', 'indexController@contact')->name('contact');


Route::get('/single_properties/{id}', 'indexController@single_properties')->name('single_properties');

Route::get('/single_agents/{id}', 'indexController@single_agents')->name('single_agents');

//===============================================Dashboard controller======================================
Route::get('/home', 'DashboardController@index')->middleware('auth');

//===========================enail_number=================================================================
Route::resource('email_number','EmailNumberController');

// ===============================Admin Social link=======================================================
Route::resource('admin_social_link','AdminSocialController');

// ============================Logo=====================================================================

Route::resource('logo', 'LogoController');

// ======================================Sliders========================================================
Route::resource('slider','SliderController');

// ===============================================Category============================================
Route::resource('category', 'CategoryController');

// ===========================================Featured Properties=======================================
Route::resource('fproperty', 'FeaturPropertyController');
// ================================Property=============================================================
Route::resource('property', 'PropertyController');

// ==============================================Agents=================================================
Route::resource('agents', 'AgentController');

// ============================================Footer==================================================
Route::resource('footers', 'FooterController');
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


Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/user', 'UserController@index')
    ->middleware('is_user')
    ->name('admin');

Route::get('/', 'Indexcontroller@index');



Auth::routes();

Route::get('/home', 'Indexcontroller@index')->name('home');
Route::get('/farmer', 'Indexcontroller@farmer')->name('farmer');
Route::get('/success', 'JobController@success')->name('success');

// Google Login
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

// Facebook Login
Route::get('/redirect1', 'SocialAuthFacebookController@redirect');
Route::get('/callback1', 'SocialAuthFacebookController@callback');


Route::group(['middleware'=>'is_admin'], function(){
    Route::resource('admin/mpmla', 'MpmlaController');
    Route::resource('admin/state', 'StateController');
    Route::resource('admin/city', 'CityController');
    Route::resource('admin/events', 'EventController');
    Route::resource('admin/news', 'NewsController');
    Route::resource('admin/ads', 'AdsController');
    Route::resource('admin/colleges', 'CollegeController');

});

Route::group(['middleware'=>'is_user'], function(){
    Route::resource('user/home', 'UserController');
    Route::resource('/apply', 'JobController');

});
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

Route::get('/', 'HomeController@home')->name('welcome');

Route::group(['middleware' => 'auth'], function () {

    Route::get('user/profile', 'Auth\ProfileController@index')->name('profile');

    Route::post('user/profile', 'Auth\ProfileController@store')->name('profile-save');

    Route::get('/events', 'EventController@index')->name('events');
    Route::post('/events/save', 'EventController@save')->name('event-save');

    Route::get('/events/add', 'EventController@add')->name('event-add');

    Route::get('/events/{event}', 'EventController@show')->name('event-show');
    
    
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




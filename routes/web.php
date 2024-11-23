<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
// });


Route::resource('/events', EventController::class);

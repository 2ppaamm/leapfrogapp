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


//Route::get('/login', 'DashboardController@login');
Route::get('/logout', function() {
    Auth::logout();
    return Redirect::home();
});

Route::get('/', 'DashboardController@index');
Route::get('/#', function() {
   dd(Auth0::getUser());
});

Route::auth();

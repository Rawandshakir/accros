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


Route::get('forgetpass' , 'Pagescontroller@forgetPass');
Route::post('forgetPass' , 'UsersController@forgetPass')->name('forgetPass');



Route::post('login', 'Auth\LoginController@login');
Route::get('login', 'Pagescontroller@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::middleware('checkAuth')->group(function () {
    Route::get('/', 'Pagescontroller@home');
    Route::get('/home', 'Pagescontroller@home')->name('home');
    Route::get('/library', 'Pagescontroller@library');
    Route::get('/news', 'Pagescontroller@news');
});



Route::middleware('checkAdmin')->group(function () {
 Route::resource('users' , 'UsersController');
});

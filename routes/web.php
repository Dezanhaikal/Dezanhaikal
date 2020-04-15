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

Route::get('/melihat', function () {
    return view('melihat');
});

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/biodata', 'BiodataController@index')->name('biodata');
Route::post('/biodata/create', 'BiodataController@create')->name('biodata.create');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('melihat','MelihatController');

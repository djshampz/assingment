<?php

use Illuminate\Support\Facades\Route;

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
    return view('gakuru.welcome');
});

//student routes

Route::get('/student', 'StudentController@index');
Route::post('/students', 'StudentController@store')->name('store');

//fee routes

Route::get('/fee', 'FeeController@index');
Route::get('/payments', 'HomeController@display');
Route::post('/fees', 'FeeController@store')->name('storefee');



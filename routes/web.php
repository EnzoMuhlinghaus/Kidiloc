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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cars', 'CarsController');
Route::resource('rents', 'RentsController');
Route::resource('categories', 'CategoriesController');

Route::get('/cars/{id}/rent', 'CarsController@rent')->name('cars.rent');

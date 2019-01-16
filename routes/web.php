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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function (){
//
//    return 'Testing';
//});
//
//Route::get('/laptops', function (){
//
//    return 'All Laptops Are here';
//});
//Route::get('/laptops', 'laptopscontroller@index');
//Route::delete('/laptops/{id}', 'laptopscontroller@destroy');
//Route::get('/laptops/{id}', 'laptopscontroller@show');
Route::resource('laptops', 'laptopscontroller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

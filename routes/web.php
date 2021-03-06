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

Route::get('contact', function () {
    return view('contact'); 
});


Route::get('a-propos', function () {
    return view('a-propos');
});

Route::get('/clients', 'ClientsController@show');

Route::get('/salut/{name}', function ($name) {
    return "Salut $name"; }); 

Route::get('/clients', 'ClientsController@index');

Route::post('clients', 'ClientsController@store');

Auth::routes();

Route::get('/clients/{client}/edit', 'ClientsController@edit');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients/{client}', 'ClientsController@show');

Route::patch('/clients/{client}', 'ClientsController@update'); 

Route::patch('/clients/{client}', 'ClientsController@update');
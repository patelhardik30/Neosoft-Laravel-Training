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
    return view('welcome');
});
Route::get('/create-user','UserController@index')->name('create-user');
Route::get('/view-user','UserController@view')->name('view-user');
Route::post('/add_user','UserController@store')->name('add-user');
Route::get('/edit-user/{id}','UserController@edit')->name('edit-user');
Route::get('/delete-user/{id}','UserController@edit')->name('delete-user');
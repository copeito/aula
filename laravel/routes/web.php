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
Route::get('/alumnos', 'StudentController@index')->name('student.index');
Route::get('/alumnos/crear', 'StudentController@create')->name('student.create');
Route::post('/alumnos/store', 'StudentController@store')->name('student.store');

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
Route::get('about', 'StudentsController@sessiontest');

// Route::get('/student/create', 'StudentsController@create')->name('student.create');
// Route::post('/student', 'StudentsController@store');
// Route::get('/student/show', 'StudentsController@showAll')->name('students.show');
// Route::get('/student/show/{id}', 'StudentsController@show')->name('student.show');

Route::prefix('student')->group(function(){
	Route::get('create', 'StudentsController@create')->name('student.create');
	Route::post('/', 'StudentsController@store');
	Route::get('show', 'StudentsController@showAll')->name('students.show');
	Route::get('show/{id}', 'StudentsController@show')->name('student.show');
});

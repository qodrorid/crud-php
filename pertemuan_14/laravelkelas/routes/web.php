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

Route::get('tes', function() {
    echo "Ini halaman tes.";
});

Route::get('/login', 'LoginController@index');
Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home.index']);
Route::get('/home/{id}/{nama}', ['uses' => 'HomeController@profile', 'as' => 'home.profile']);
Route::get('/home/input', ['uses' => 'HomeController@input', 'as' => 'home.input']);

Route::get('/student', ['uses' => 'StudentController@index', 'as' => 'student.index']);
Route::post('/student', ['uses' => 'StudentController@store', 'as' => 'student.store']);
Route::get('/student/create', ['uses' => 'StudentController@create', 'as' => 'student.create']);
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

Route::get('/demo-directive', 'TestController@directive')->name('directive');
Route::get('/demo-filter', 'TestController@filter')->name('filter');
Route::get('/student/{id}', 'TestController@student');

Route::get('/get-score-student', 'TestController@getScoreStudent');

Route::post('/get-student', 'TestController@getStudent');

Route::get('/get-class', 'TestController@getClass');

Route::post('/update-student', 'TestController@updateStudent');

Route::post('/update-student-jquery', 'TestController@updateStudentJquery');




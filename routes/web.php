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

Route::get('/test-1', 'TestController@test1')->name('test1');
Route::get('/test-2', 'TestController@test2')->name('test2');
Route::get('/test-3', 'TestController@test3')->name('test3');
Route::get('/test-4/{id}', 'TestController@test4');
Route::get('/test-5', 'TestController@test5');
Route::get('/test-6', 'TestController@test6');
Route::get('/test-7', 'TestController@test7');
Route::get('/test-8', 'TestController@test8');
Route::get('/test-9', 'TestController@test9');
Route::get('/test-10', 'TestController@test10');

Route::get('/get-score-student', 'TestController@getScoreStudent');

Route::post('/get-student', 'TestController@getStudent');

Route::get('/get-class', 'TestController@getClass');

Route::post('/update-student', 'TestController@updateStudent');

Route::post('/update-student-jquery', 'TestController@updateStudentJquery');




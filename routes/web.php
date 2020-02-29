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

Auth::routes();

//Guest Pages
Route::get('/', 'PagesController@index')->name('index');
Route::get('/dashboard', 'ProjectController@home')->name('home')->middleware('authuser');
Route::get('/project/{id}', 'ProjectController@project');
Route::get('/projecten', 'ProjectController@projectenpage');
//Admin Pages

//Make Project
Route::get('/makeproject', 'ProjectController@createget')->middleware('authuser');
Route::post('/newproject', 'ProjectController@createpost')->middleware('authuser');
//Change Project
Route::get('/project/{id}/aanpassen', 'ProjectController@changeproject')->middleware('authuser');
Route::post('/project/{id}/aanpassen', 'ProjectController@changepost')->middleware('authuser');
//Make BlogPost
Route::get('/project/{id}/update', 'UpdateController@getupdate')->middleware('authuser');
Route::post('/project/{id}/update', 'UpdateController@postupdate')->middleware('authuser');
//Change BlogPost & Delete
Route::get('/blogpost/{id}/change', 'UpdateController@getchange')->middleware('authuser');
Route::post('/blogpost/{id}/change', 'UpdateController@postchange')->middleware('authuser');
//Delete BlogPost
Route::post('/blogpost/delete/{id}', 'UpdateController@deletepost')->middleware('authuser');


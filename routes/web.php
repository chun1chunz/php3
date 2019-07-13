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
Route::get('users/{id}/{name}', function ($id,$name) {
		return 'Tham số là:'.$id.'---'.$name;	
	});
Route::get('hello', 'HelloController@hello');
Route::get('index', 'HelloController@index');
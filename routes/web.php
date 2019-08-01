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
// Class Route
Route::group(
    ['prefix' => 'classes', 'as' => 'classes.'],
    function () {
        Route::get('/', 'ClassRoomController@index')->name('list');
        Route::get('add', 'ClassRoomController@createForm')->name('add');
        Route::post('create-post', 'ClassRoomController@create')->name('create-post');
        Route::get('{class}/edit', 'ClassRoomController@editForm')->name('edit');
        Route::post('update-post', 'ClassRoomController@update')->name('update');
    }
);
// Route::get('classes', 'ClassRoomController@index')->name('classes');
// Route::get('classes/add', 'ClassRoomController@createForm')->name('classes.add-form');
// Route::post('classes/create-post', 'ClassRoomController@create')
//     ->name('classes.create-post');

Route::get('students', 'StudentController@index')->name('students');	
Route::get('users/{id}/{name}', function ($id,$name) {
		return 'Tham số là:'.$id.'---'.$name;	
	});
	//
	//
Route::get('hello', 'HelloController@hello');
Route::get('index', 'HelloController@index');

//
//
//Admin tmeplate
//
//

Route::get('/admin_temp', function(){
	return view('admin.master');
});
Route::get('/admin_class', function(){
	return view('admin.class');
});

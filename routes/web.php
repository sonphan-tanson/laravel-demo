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
Route::get('/hello','HelloController@hello');
Route::get('/input','InputController@index1');
Route::post('/output','InputController@index2')->name('sum');
Route::get('/students','StudentController@index')->name('students');
Route::get('/admins',function(){
    return view('admin');
});
Route::get('/users',function(){
    return view('user');
})->name('students');
Route::get('/admin',function(){
    return view('admin.master');
})->name('students');
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('/','CrudController');
Route::get('/','CrudController@index');

Route::get ('/add','CrudController@create'); //add data
Route::post ('/store','CrudController@store'); //kirim tambah data ke db

Route::get ('/read/{id}','CrudController@Show'); //baca lanjut 
Route::post ('/update/{id}','CrudController@update'); //tombol kirim 
Route::get ('/edit/{id}','CrudController@edit'); //tampilkan yang di edit 

Route::get ('/delete/{id}','CrudController@destroy'); //delete

Route::get ('/query','CariController@search'); //search
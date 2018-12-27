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
Route::get("/", "PatoController@index0");
Route::get("/about", "PatoController@index1");
Route::get("/blog-detail", "PatoController@index2");
Route::get("/blog", "PatoController@index3");
Route::get("/contact", "PatoController@index4");
Route::get("/gallery", "PatoController@index5");
Route::get("/menu", "PatoController@index6");
Route::get("/reservation", "PatoController@index7");

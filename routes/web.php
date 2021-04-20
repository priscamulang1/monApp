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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/show/{id}','App\Http\Controllers\DepartementController@show');
Route::get('/matAdd/{id}','App\Http\Controllers\MaterielController@create');
Route::get('/','App\Http\Controllers\DepartementController@index');
Route::get('/edit/{id}','App\Http\Controllers\DepartementController@edit');
Route::get('/delete/{id}','App\Http\Controllers\DepartementController@destroy');
Route::get('/create','App\Http\Controllers\DepartementController@create');
Route::post('/store','App\Http\Controllers\DepartementController@store');
Route::post('/storeM','App\Http\Controllers\MaterielController@store');
Route::post('/update/{id}','App\Http\Controllers\DepartementController@update');

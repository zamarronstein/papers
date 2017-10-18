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

Route::resource('papers', 'PapersController');
Route::resource('categoria', 'CategoriaController');
Route::post('categoria/save', 'CategoriaController@save');
Route::post('categoria/{id}/actualizar', 'CategoriaController@actualizar');

Route::resource('subcategoria', 'SubCategoriaController');
Route::post('subcategoria/save', 'SubCategoriaController@save');
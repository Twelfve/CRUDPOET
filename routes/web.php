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

Route::get('/', [
    'uses' => 'CRUD@index',
    'as' => 'show'
]);

Route::get('/insert', [
    'uses' => 'CRUD@create',
    'as' => 'insert'
]);

Route::get('/detail/{id}', [
    'uses' => 'CRUD@show',
    'as' => 'detail'
]);

Route::get('/delete/{id}', [
    'uses' => 'CRUD@destroy',
    'as' => 'delete'
]);

Route::post('/save', [
    'uses' => 'CRUD@store',
    'as' => 'save'
]);

Route::post('/update', [
    'uses' => 'CRUD@update',
    'as' => 'update'
]);

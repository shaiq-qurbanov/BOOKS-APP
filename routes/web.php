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

// Route::get('/',function() {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\BookController@index');
Route::get('user','App\Http\Controllers\UserController@show');
Route::get('layout','App\Http\Controllers\MyController@test');
Route::get('client','App\Http\Controllers\ClientController@client');

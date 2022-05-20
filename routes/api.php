<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    });
Route::post('book/create', 'App\Http\Controllers\BookController@save');
Route::post('book/delete', 'App\Http\Controllers\BookController@delete');
Route::post('book/update', 'App\Http\Controllers\BookController@update');
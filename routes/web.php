<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
    return view('index');
});

Route::get('/api/login',"App\Http\Controllers\RegisterController@createLogin");
Route::post('/api/login',"App\Http\Controllers\RegisterController@storeLogin");


Route::get('/api/signup',"App\Http\Controllers\RegisterController@create");
Route::post('/api/signup',"App\Http\Controllers\RegisterController@store");

Route::get('/api/user/{user}',"App\Http\Controllers\UserController@show");

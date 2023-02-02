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


Route::get('/login',[\App\Http\Controllers\RegisterController::class,'createLogin']);
Route::post('/login',"App\Http\Controllers\RegisterController@storeLogin");


//Route::get('/create',"App\Http\Controllers\RegisterController@create");
Route::get('/signup',[\App\Http\Controllers\RegisterController::class,'create']);
Route::post('/signup',"App\Http\Controllers\RegisterController@store");


Route::get('/user/{user}',"App\Http\Controllers\UserController@show");
Route::put('/user/{user}', "App\Http\Controllers\UserController@update");

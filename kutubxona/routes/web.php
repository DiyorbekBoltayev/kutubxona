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

Route::get('/', function () {
    return view('index');
});
Route::post('/search',[\App\Http\Controllers\HomeController::class,'showsearch']);
Route::get('/berish',[\App\Http\Controllers\HomeController::class,'berish']);
Route::get('/berilganlar',[\App\Http\Controllers\HomeController::class,'berilganlar']);
Route::get('/kurish',[\App\Http\Controllers\HomeController::class,'kurish']);

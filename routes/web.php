<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
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
    return view('home');
});
Route::get('/add',[HomeController::class,'add'])->name('addbook');
Route::post('/add',[HomeController::class,'add_books'])->name('add_books');




   Route::get('autocomplete',[SearchController::class,'index']);
   Route::post('autocomplete/fetch',[SearchController::class,'fetch'])->name('auto');


   Route::post('/kitob',[SearchController::class,'fetch_kitob'])->name('kitob');


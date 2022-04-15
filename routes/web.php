<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Http;
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

Route::post('/autonashriyot',[\App\Http\Controllers\AutoSearchController::class,'nashriyot'])->name('nashriyotauto');
Route::post('/automuallif',[\App\Http\Controllers\AutoSearchController::class,'muallif'])->name('muallifauto');
Route::post('/autokitonturi',[\App\Http\Controllers\AutoSearchController::class,'kitob_turi'])->name('kitobturiauto');
Route::post('/autojavon',[\App\Http\Controllers\AutoSearchController::class,'javon'])->name('javonauto');



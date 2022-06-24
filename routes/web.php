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

Route::get('/', [HomeController::class,'useradd']);
Route::post('/register',[HomeController::class,'register'])->name('registeruser');
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/add',[HomeController::class,'add'])->name('addbook');
Route::post('/add',[HomeController::class,'add_books'])->name('add_books');
Route::get('/borrow',[HomeController::class,'borrow'])->name('borrowbook');
Route::get('/confirmborrow',[HomeController::class,'confirmborrow'])->name('confirmborrow');
Route::get('/showborrower',[HomeController::class,'showborrower'])->name('showborrower');
Route::get('/muddat',[HomeController::class,'muddat'])->name('muddat');
Route::get('/statistika',[HomeController::class,'statistika'])->name('statistika');
Route::get('/foydalanuvchilar',[HomeController::class,'foydalanuvchilar'])->name('foydalanuvchilar');


Route::post('/autonashriyot',[\App\Http\Controllers\AutoSearchController::class,'nashriyot'])->name('nashriyotauto');
Route::post('/automuallif',[\App\Http\Controllers\AutoSearchController::class,'muallif'])->name('muallifauto');
Route::post('/autokitonturi',[\App\Http\Controllers\AutoSearchController::class,'kitob_turi'])->name('kitobturiauto');
Route::post('/autojavon',[\App\Http\Controllers\AutoSearchController::class,'javon'])->name('javonauto');
Route::post('/autosarlavha',[\App\Http\Controllers\AutoSearchController::class,'sarlavha'])->name('sarlavhaauto');
Route::post('/automahalliyid',[\App\Http\Controllers\AutoSearchController::class,'mahalliyid'])->name('mahalliyidauto');
Route::post('/autotuman',[\App\Http\Controllers\AutoSearchController::class,'tuman'])->name('tumanauto');



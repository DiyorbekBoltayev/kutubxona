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
Route::get('/confirmborrow/{id}',[HomeController::class,'confirmborrow'])->name('confirmborrow');
Route::get('/showborrower/{id}',[HomeController::class,'showborrower'])->name('showborrower');
Route::post('borrow',[HomeController::class,'zzz'])->name('zzz');
Route::get('/muddat',[HomeController::class,'muddat'])->name('muddat');
Route::get('/statistika',[HomeController::class,'statistika'])->name('statistika');
Route::get('/foydalanuvchilar',[HomeController::class,'foydalanuvchilar'])->name('foydalanuvchilar');

Route::get('qaytdi/{id}',[HomeController::class,'qaytdi'])->name('qaytdi');
Route::post('sarala',[HomeController::class,'sarala'])->name('sarala');

Route::get('/booklist',[HomeController::class,'list'])->name('booklist');
Route::get('singlebook/{id}',[HomeController::class,'singlebook'])->name('singlebook');
Route::get('editbook/{id}',[HomeController::class,'editbook'])->name('editbook');
Route::post('editbook',[HomeController::class,'save_edit'])->name('save_edit');
Route::get('deletebook/{id}',[HomeController::class,'deletebook'])->name('deletebook');

Route::get('gr_single/{id}',[HomeController::class,'gr_single'])->name('gr_single');
Route::get('groupadd',[HomeController::class,'add_gr'])->name('add_gr');
Route::post('groupadd',[HomeController::class,'saqla_gr'])->name('saqla_gr');
Route::get('list_gr',[HomeController::class,'list_gr'])->name('list_gr');
Route::get('edit_gr/{id}',[HomeController::class,'edit_gr'])->name('edit_gr');
Route::get('delete_gr/{id}',[HomeController::class,'delete_gr'])->name('delete_gr');
Route::post('update_gr',[HomeController::class,'update_gr'])->name('update_gr');

Route::post('login_1',[HomeController::class,'login_1'])->name('login_1');
Route::get('login_1',[HomeController::class,'login_2'])->name('login_2');

Route::post('kutob_izlash',[HomeController::class,'kitob_izlash'])->name('kitob_izla');

Route::post('/autonashriyot',[\App\Http\Controllers\AutoSearchController::class,'nashriyot'])->name('nashriyotauto');
Route::post('/automuallif',[\App\Http\Controllers\AutoSearchController::class,'muallif'])->name('muallifauto');
Route::post('/autokitonturi',[\App\Http\Controllers\AutoSearchController::class,'kitob_turi'])->name('kitobturiauto');
Route::post('/autojavon',[\App\Http\Controllers\AutoSearchController::class,'javon'])->name('javonauto');
Route::post('/autosarlavha',[\App\Http\Controllers\AutoSearchController::class,'sarlavha'])->name('sarlavhaauto');
Route::post('/automahalliyid',[\App\Http\Controllers\AutoSearchController::class,'mahalliyid'])->name('mahalliyidauto');
Route::post('/autotuman',[\App\Http\Controllers\AutoSearchController::class,'tuman'])->name('tumanauto');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

//Pembelian
// Route::get('list-beli/{id}',[Controller::class,'list_beli'])->name('list-beli');
Route::resource('list-beli',PembelianController::class);
Route::get('form_beli',[PembelianController::class,'create']);

//Faktur
Route::get('form_faktur',[PembelianController::class,'create_faktur']);
Route::get('detail_faktur',[PembelianController::class,'show_faktur']);

//Kontak
Route::resource('data_kontak',KontakController::class);
Route::get('form_kontak',[KontakController::class,'create']);

Route::get('login',[Controller::class,'login']);
Route::get('soon',[Controller::class,'soon']);
Route::get('resetpw',[Controller::class,'resetpw']);
Route::get('recoverypw',[Controller::class,'recoverypw']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wildanController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\petugasController;






Route::get('/', function () {
    return view('welcome');
});

//Route::get('/coba', function () {
    //return 'CBAIN';
//});

//Route::get('home', function () {
    //return view('home');
//});

//Route::get('isi', function () {
  //return view('isi');
//});

//Route::get('login', function () {
  //return view('login');
//});

Route::get('/home', [wildanController::class,'index']);

Route::post('/isi', [wildanController::class,'tambah_pengaduan']);

Route::get('masyarakat', [masyarakatController::class,'rakyat']);

Route::get('petugas', [petugasController::class,'petugas']);

Route::get('loginmasyarakat', [masyarakatController::class,'register']);

Route::get('logtugas', [petugasController::class,'login']);

Route::get('/hapus-pengaduan/{id}', [wildanController::class,'delete']);

Route::get('/detail/{id}', [wildanController::class,'detail']);

Route::put('/edit/{id}', [wildanController::class,'berubah'])->name('update');

Route::get('/update/{id}', [wildanController::class,'updatebaru']);


Route::get('isi', function () {
    return view('isi');
});

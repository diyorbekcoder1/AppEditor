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
    return view('Ckeditor');
});
Route::get('/admin', [\App\Http\Controllers\CkeditorController::class, 'index'])->name('home');
Route::resource('/ckeditor', \App\Http\Controllers\CkeditorController::class);
//Route::get('summernote-image-upload', [\App\Http\Controllers\CkeditorController::class, 'index']);
//Route::post('post-summernote-image-upload', [\App\Http\Controllers\CkeditorController::class, 'store']);
//
//Route::get('/admin', [\App\Http\Controllers\CkeditorController::class, 'create'])->name('home');
//Route::resource('/Ckeditor', \App\Http\Controllers\CkeditorController::class);
//////Route::get('post/create',[\App\Http\Controllers\CkeditorController::class,'create']);
//Route::post('Ckeditor/upload',[\App\Http\Controllers\CkeditorController::class,'store'])->name('ckeditor.upload');
//
//Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.image-upload');

//Route::get('/admin', [\App\Http\Controllers\CkeditorController::class, "index"])->name('home');
//Route::resource('/logo', \App\Http\Controllers\CkeditorController::class);

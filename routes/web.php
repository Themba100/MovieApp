<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;

Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{id}',[MoviesController::class,'show'])->name('movies.show');


Route::get('/tv',[TvController::class,'index'])->name('tv.index');
Route::get('/tv/{id}',[TvController::class,'show'])->name('tv.show');


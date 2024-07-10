<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/',[MyController::class,'index'])->name('index');
Route::post('/create',[MyController::class,'create'])->name('create');
Route::get('/delete/{id}',[MyController::class,'delete'])->name('delete');
Route::get('/complete/{id}',[MyController::class,'complete'])->name('complete');
Route::get('/incomplete/{id}',[MyController::class,'incomplete'])->name('incomplete');
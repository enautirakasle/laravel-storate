<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\CategoryController;

Route::get('/', [InfoController::class, 'index'])->name('infos.index');
Route::get('/create', [InfoController::class, 'create'])->name('infos.create');
Route::get('/edit/{$info}', [InfoController::class, 'edit'])->name('infos.edit');
Route::post('/store', [InfoController::class, 'store'])->name('infos.store');
Route::put('/update', [InfoController::class, 'store'])->name('infos.update');


Route::resource('categories', CategoryController::class);
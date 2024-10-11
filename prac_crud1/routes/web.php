<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TestController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DataController::class, 'index'])->name('file.index');
Route::get('/create', [DataController::class, 'create'])->name('file.create');
Route::post('/insert', [DataController::class,'store'])->name('file.insert');
Route::get('/insert', [DataController::class,'insert'])->name('file.insert');
Route::get('/show', [DataController::class, 'show'])->name('file.show');
Route::get('/{data}/edit', [DataController::class, 'edit'])->name('file.edit');
Route::put('/{data}', [DataController::class, 'update'])->name('file.update');
Route::delete('/{data}', [DataController::class, 'destroy'])->name('file.destroy');

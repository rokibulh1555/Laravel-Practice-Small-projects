<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::get('/',[NoteController::class,'index'])->name('note.index');
Route::post('/insert',[NoteController::class,'store'])->name('note.insert');
Route::get('/insert',[NoteController::class,'insert'])->name('note.insert');
Route::get('/show',[NoteController::class, 'show'])->name('note.show');
Route::get('/edit/{note}',[NoteController::class, 'edit'])->name('note.edit');
Route::put('/update/{note}',[NoteController::class, 'update'])->name('note.update');
Route::delete('/delete/{note}',[NoteController::class, 'destroy'])->name('note.destroy');



//Route::post('/insert',[NoteController::class,'store'])->name('note.insert');

//Route::resource('note', NoteController::class);

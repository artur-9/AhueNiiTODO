<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/notes', [TodoController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [TodoController::class, 'create'])->name('notes.create');
Route::post('/notes', [TodoController::class, 'store'])->name('notes.store');
Route::get('/notes/{notes}', [TodoController::class, 'show'])->name('notes.show');
Route::get('/notes/{notes}/edit', [TodoController::class, 'edit'])->name('notes.edit');
Route::patch('/notes/{notes}', [TodoController::class, 'update'])->name('notes.update');
Route::delete('/notes/{notes}', [TodoController::class, 'destroy'])->name('notes.delete');
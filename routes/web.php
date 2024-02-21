<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*Ruta para mostrar las notas*/
Route::get('/notes/{note}', [App\Http\Controllers\NoteController::class, 'show'])->name('notes.show');

/*Ruta para crear, borrar o editar las notas*/
Route::middleware('auth')->group(function () {
    Route::get('/notes', [App\Http\Controllers\NoteController::class, 'index'])->name('notes.index');
    Route::get('/notes/create', [App\Http\Controllers\NoteController::class, 'create'])->name('notes.create');
    Route::post('/notes', [App\Http\Controllers\NoteController::class, 'store'])->name('notes.store');
    Route::get('/notes/{note}/edit', [App\Http\Controllers\NoteController::class, 'edit'])->name('notes.edit');
    Route::patch('/notes/{note}', [App\Http\Controllers\NoteController::class, 'update'])->name('notes.update');
    Route::delete('/notes/{note}', [App\Http\Controllers\NoteController::class, 'destroy'])->name('notes.destroy');
}); 

require __DIR__.'/auth.php';

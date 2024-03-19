<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::get('/proyecto', [ProyectoController::class, 'create'])->name('proyectos.create');
Route::post('/proyecto', [ProyectoController::class, 'store'])->name('proyectos.store');
Route::get('/proyecto/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::put('/proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::delete('proyectos/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyectos.delete');
Route::get('/pdf', [ProyectoController::class, 'verPdf'])->name('proyectos.verPdf');

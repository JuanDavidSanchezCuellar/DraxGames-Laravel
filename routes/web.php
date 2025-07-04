<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ReaccionController;

Route::get('/', fn() => view('index'))->name('inicio');
Route::get('/comentarios/ver', [ComentarioController::class, 'ver'])->name('comentarios.ver');
Route::get('/comentarios/buscar', [ComentarioController::class, 'buscar'])->name('comentarios.buscar');
Route::post('/comentarios/ver', [ComentarioController::class, 'ver'])->name('comentarios.ver');
Route::get('/comentarios', [ComentarioController::class, 'verFormulario'])->name('comentarios.formulario');
Route::post('/comentarios', [ComentarioController::class, 'agregar'])->name('comentarios.agregar');
Route::post('/like', [LikeController::class, 'like'])->name('like');
Route::post('/dislike', [LikeController::class, 'dislike'])->name('dislike');
Route::get('/reacciones/buscar', [ReaccionController::class, 'formulario'])->name('reacciones.formulario');
Route::post('/reacciones/ver', [ReaccionController::class, 'ver'])->name('reacciones.ver');
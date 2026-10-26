<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactoController::class, 'inicio'])->name('inicio');
Route::get('/servicios', fn () => view('servicios'))->name('servicios');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

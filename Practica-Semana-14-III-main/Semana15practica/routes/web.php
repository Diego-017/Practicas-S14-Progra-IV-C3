<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\HomeController;

Route::get('/', [Controlador::class, 'index']);
Route::get('/catalogo', [Controlador::class, 'catalogo']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

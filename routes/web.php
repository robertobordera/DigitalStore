<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/productos/create',[ProductoController::class,'create'])->name('productos.create');

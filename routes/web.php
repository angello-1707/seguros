<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;

 Route::get('/', [productosController::class, "index"])->name("productos.index");
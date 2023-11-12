<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
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


Route::get('/', [LinkController::class, 'index'])->name('index');
Route::get('/tienda', [LinkController::class, 'tienda'])->name('tienda');
Route::get('/empresa', [LinkController::class, 'empresa'])->name('empresa');
Route::get('/contacto', [LinkController::class, 'contacto'])->name('contacto');
Route::get('/header', [LinkController::class, 'header'])->name('header');



Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('/carrito', [ProductController::class, 'carrito'])->name('carrito');
Route::get('/cotizar', [ProductController::class, 'cotizar'])->name('cotizar');


Route::get('/header', [LinkController::class, 'header'])->name('header');

<?php

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

Route::get('/', "App\Http\Controllers\HomeController@index")->name("home.index");

Route::get("/productos", "App\Http\Controllers\ProductosController@gridProductos")->name("productos.gridProductos");

Route::get('/productos/{id}', [ProductosController::class, 'vistaUnicaProducto'])->name('productos.vistaUnicaProducto');

Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");
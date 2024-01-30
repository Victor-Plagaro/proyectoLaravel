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

<<<<<<< HEAD
Route::get("/productos", "App\Http\Controllers\ProductosController@gridProductos")->name("productos.gridProductos");

Route::get('/productos/{id}', [App\Http\Controllers\ProductosController::class, 'show'])->name('productos.vistaUnicaProducto');

Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");
=======
Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");

>>>>>>> 8ae21f5896c7fd7817dae936c6c6f66d2341fb1b

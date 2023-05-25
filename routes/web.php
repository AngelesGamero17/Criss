<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DescuentosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DetalleventasController;
use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Auth;


/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    Route::get('/Login','App\Http\Controllers\RelacionController@index');  
    Route::get('/clientes/buscar', 'ClienteController@buscar');
    Route::resource('/',CarritoController::class)->names('Carrito');
    Route::view('/irCarrito', 'carrito.irCarrito')->name('irCarrito');
    Route::resource('/Categoria',CategoriasController::class)->names('Categorias')->middleware('auth');
    Route::resource('/Descuento',DescuentosController::class)->names('Descuentos')->middleware('auth');
    Route::resource('/Producto',ProductosController::class)->names('Productos')->middleware('auth');
    Route::resource('/Cliente',ClientesController::class)->names('Clientes')->middleware('auth');
    Route::resource('/Detalleventa',DetalleventasController::class)->names('Detalleventas')->middleware('auth');



    //Auth::routes();

    Auth::routes (['register'=>false,'reset' =>false]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::group(['middleware'=>'auth'],function () {
       Route::get('/Login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
       
    });

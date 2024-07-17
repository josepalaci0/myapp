<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Ruta para obtener todos los productos (GET)
Route::get('/products', [ProductController::class, 'index']);

// Ruta para crear un nuevo producto (POST)
Route::post('/products', [ProductController::class, 'store']);

// Ruta para obtener un solo producto por su ID (GET)
Route::get('/products/{product}', [ProductController::class, 'show']);

// Ruta para actualizar un producto por su ID (PUT)
Route::put('/products/{product}', [ProductController::class, 'update']);

// Ruta para actualizar parcialmente un producto por su ID (PATCH)
Route::patch('/products/{product}', [ProductController::class, 'update']);

// Ruta para eliminar un producto por su ID (DELETE)
Route::delete('/products/{product}', [ProductController::class, 'destroy']);

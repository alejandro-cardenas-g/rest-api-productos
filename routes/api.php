<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', [ProductController::class, 'getAll']); // Obtener todos los productos
Route::get('/productos/{id}', [ProductController::class, 'getOne']); // Obtener un producto por id
Route::post('/productos', [ProductController::class, 'create']); // Crear un producto
Route::delete('/productos/{id}', [ProductController::class, 'delete']); // Eliminar un producto
Route::patch('/productos/{id}', [ProductController::class, 'update']); // Actualizar un producto

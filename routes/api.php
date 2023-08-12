<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsApiController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/products', [ProductsApiController::class, 'index']);
Route::get('/products/{id}', [ProductsApiController::class, 'show']);
Route::post('/products', [ProductsApiController::class,'store']);
Route::put('/products/{id}', [ProductsApiController::class, 'update']);
Route::delete('/products/{id}', [ProductsApiController::class, 'destroy']);
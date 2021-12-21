<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('categories', [\App\Http\Controllers\Api\CategoryController::class, 'index']);
//Route::get('categories/{category}', [\App\Http\Controllers\Api\CategoryController::class, 'show']);
//Route::post('categories', [\App\Http\Controllers\Api\CategoryController::class, 'store']);
//Route::put('categories/{category}', [\App\Http\Controllers\Api\CategoryController::class, 'update']);
//Route::delete('categories/{category}', [\App\Http\Controllers\Api\CategoryController::class, 'destroy']);

Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);

Route::get('products', [\App\Http\Controllers\Api\ProductController::class, 'index']);




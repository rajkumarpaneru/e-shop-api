<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Models\Category;
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

//Route::get('categories', [CategoryController::class, 'index']);
//Route::get('categories/{category}', [CategoryController::class, 'show']);
//Route::post('categories', [CategoryController::class, 'store']);
//Route::put('categories/{category}', [CategoryController::class, 'update']);
//Route::delete('categories/{category}', [CategoryController::class, 'destroy']);

Route::apiResource('categories', CategoryController::class)
    ->middleware('auth:sanctum');

Route::get('products', [ProductController::class, 'index']);

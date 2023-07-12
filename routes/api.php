<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rest\V1\CategoryController;
use App\Http\Controllers\Rest\V1\FavoriteController;
use App\Http\Controllers\Rest\V1\MovieController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\Rest\V1'], function(){
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/movie', [MovieController::class, 'index']);
    Route::get('/movie/{id}', [MovieController::class, 'show']);
    Route::get('/movie/{nombre}', [MovieController::class, 'searchByName']);
    Route::get('/movie/category/{id_category}', [MovieController::class, 'searchByCategory']);
    Route::get('/favorite', [FavoriteController::class, 'index']);
});

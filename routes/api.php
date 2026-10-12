<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->middleware('auth:sanctum');
Route::post('/users/login', [App\Http\Controllers\UsersController::class, 'login']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/counties', [App\Http\Controllers\CountiesController::class, 'index']);
Route::get('/cities', [App\Http\Controllers\CitiesController::class, 'index']);
Route::get('/cities/search', [App\Http\Controllers\CitiesController::class, 'search']);
Route::get('/counties/{id}', [App\Http\Controllers\CountiesController::class, 'show']);
Route::get('/cities/{id}', [App\Http\Controllers\CitiesController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/counties', [App\Http\Controllers\CountiesController::class, 'store']);
    Route::put('/counties/{id}', [App\Http\Controllers\CountiesController::class, 'update']);
    Route::delete('/counties/{id}', [App\Http\Controllers\CountiesController::class, 'destroy']);

    Route::post('/cities', [App\Http\Controllers\CitiesController::class, 'store']);
    Route::put('/cities/{id}', [App\Http\Controllers\CitiesController::class, 'update']);
    Route::delete('/cities/{id}', [App\Http\Controllers\CitiesController::class, 'destroy']);
});

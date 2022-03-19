<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\UserController;



Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);



Route::get('usuarios', [UserController::class, 'usuarios']);
Route::put('/actualiza/{id}', [UserController::class, 'actualiza']);
Route::get('/eliminar/{id}', [UserController::class, 'eliminar']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });
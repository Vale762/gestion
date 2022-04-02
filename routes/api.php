<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\InvernaderoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\TemperaturaController;

//laravel passport
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

//Creacion usuarios, actualizacion y eliminacion mediante UserController

Route::get('usuarios', [UserController::class, 'usuarios']);
Route::put('/actualiza/{id}', [UserController::class, 'actualiza']);
Route::get('/eliminar/{id}', [UserController::class, 'eliminar']);

//Creacion invernaderos,actualizacion y eliminacion mediante InvernaderoController

Route::get('invernaderos', [InvernaderoController::class, 'index']);
Route::post('/invernaderos/crear', [InvernaderoController::class, 'store']);  //guardar
Route::put('/invernaderos/actualizar/{id}', [InvernaderoController::class, 'update']); //actualizar
Route::get('/invernaderos/detalle/{id}',[InvernaderoController::class, 'show']); //Invernadero específico
Route::delete('/invernaderos/eliminar/{id}', [InvernaderoController::class, 'destroy']); //eliminar

//Creacion temperaturas,actualizacion y eliminacion mediante TemperaturaController

Route::get('temperatura', [TemperaturaController::class, 'index']);
Route::post('/temperatura/registros', [TemperaturaController::class, 'store']);  //guardar
Route::put('/temperatura/actualizaciones/{id}', [TemperaturaController::class, 'update']); //actualizar
Route::get('/temperatura/detalle/{id}',[InvernaderoController::class, 'show']); //Invernadero específico
Route::delete('/temperatura/eliminaciones/{id}', [TemperaturaController::class, 'destroy']); //eliminar

//----------------------------------------------------------------------------------//

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });
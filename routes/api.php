<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvernaderoController;
use App\Http\Controllers\TemperaturaController;

//laravel passport
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

//Creacion usuarios, actualizacion y eliminacion mediante UserController

Route::get('usuarios', [UserController::class, 'usuarios']);
Route::put('/actualiza/{id}', [UserController::class, 'actualiza']);
Route::get('/eliminar/{id}', [UserController::class, 'eliminar']);

//Creacion invernaderos,actualizacion y eliminacion mediante InvernaderoController

Route::get('invernadero', [InvernaderoController::class, 'invernadero']);
Route::post('/store', [InvernaderoController::class, 'store']);  //guardar
Route::put('/update/{id}', [InvernaderoController::class, 'update']); //actualizar
Route::get('/destroy/{id}', [InvernaderoController::class, 'destroy']); //eliminar

//Creacion temperaturas,actualizacion y eliminacion mediante TemperaturaController

Route::get('temperatura', [TemperaturaController::class, 'temperatura']);
Route::post('/registros', [TemperaturaController::class, 'registros']);  //guardar
Route::put('/actualizaciones/{id}', [TemperaturaController::class, 'actualizaciones']); //actualizar
Route::get('/eliminaciones/{id}', [TemperaturaController::class, 'eliminaciones']); //eliminar

//----------------------------------------------------------------------------------//

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });
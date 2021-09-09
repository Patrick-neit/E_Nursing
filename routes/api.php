<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PacientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|Aqui defino todas las rutas de mis peticiones Api
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function () {
    return "Hola esta es una route de Api";
});
Route::apiResource( 'pacientes',  PacientController::class); //Api para listar pacientes



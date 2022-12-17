<?php

use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EstoqueController;
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

Route::apiResources([
    'clientes' => ClienteController::class,
    'contratos' => ContratoController::class,
    'aparelhos' => AparelhoController::class,
    'estoques' => EstoqueController::class,
    'contas' => ContaController::class,

]);

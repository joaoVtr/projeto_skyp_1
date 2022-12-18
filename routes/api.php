<?php

use App\Http\Controllers\AparelhoController;
use App\Http\Controllers\Api\AuthClienteController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ClienteContratoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EstoqueController;
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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/cliente/login', [AuthClienteController::class, 'login']);
// Route::post('/cliente/register', [AuthClienteController::class, 'register']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResources([
        'clientes' => ClienteController::class,
        'contratos' => ContratoController::class,
        'aparelhos' => AparelhoController::class,
        'estoques' => EstoqueController::class,
        'contas' => ContaController::class,
        'clientecontratos' => ClienteContratoController::class,
    ]);
});

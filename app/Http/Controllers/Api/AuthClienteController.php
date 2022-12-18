<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class AuthClienteController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'cpf' => ['string', 'required'],
        ]);

        $user = Cliente::where('cpf', $request->cpf)->first();
        if (isset($user)) {

            $authToken = $user->createToken('auth-token', ['role:cliente'])->plainTextToken;

            return response()->json([
                'access_token' => $authToken,
            ]);
        } else {
            return response()->json([
                'data' => 'CPF não encontrado',
            ], 404);
        }
    }
}

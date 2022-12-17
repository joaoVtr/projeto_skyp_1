<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteContratoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'aparelho_id' => ['exists:aparelhos,id'],
            'contrato_id' => ['exists:contratos,id'],
            'conta_id' => ['exists:contas,id'],
            'cliente_id' => ['exists:clientes,id'],
            'cliente_id' => ['exists:clientes,id'],
            'logradouro' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
            'cep' => ['string'],
            'cartao' => ['string'],
            'numero' => ['string'],
            'numero_serie' => ['string'],
            'valor' => ['string'],
            'data_instalacao' => ['date'],
            'dia_vencimento' => ['date'],
            'observacao' => ['string'],
        ];
    }
}

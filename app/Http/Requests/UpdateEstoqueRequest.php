<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateEstoqueRequest extends FormRequest
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
            'aparelho_id' => [
                'required', Rule::unique('estoques', 'aparelho_id')->ignore(Request::segment(3), 'id')
            ],
            'numero_cartao' => ['string'],
            'conta_sky' => ['string']
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UpdateAparelhoRequest extends FormRequest
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
            'contrato_id' => [
                'required', Rule::unique('aparelhos', 'contrato_id')->ignore(Request::segment(3), 'id')
            ],
            'modelo' => ['string'],
            'observacao' => ['string']
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContratoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'contrato' => $this->contrato,
            'nome' => $this->nome,
            'valor' => $this->valor,
            'status' => $this->status,
            'criado_em' => date('Y-m-d', strtotime($this->created_at)),
            'atualizado_em' => date('Y-m-d', strtotime($this->updated_at)),
        ];
    }
}

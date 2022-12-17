<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteContratoResource extends JsonResource
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
            'cliente_id' => $this->cliente_id,
            'contrato_id' => $this->contrato_id,
            'conta_id' => $this->conta_id,
            'aparelho_id' => $this->aparelho_id,
            'logradouro' => $this->logradouro,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'cep' => $this->cep,
            'cartao' => $this->cartao,
            'numero' => $this->numero,
            'numero_serie' => $this->numero_serie,
            'valor' => $this->valor,
            'data_instalacao' => $this->data_instalacao,
            'dia_vencimento' => $this->dia_vencimento,
            'observacao' => $this->observacao,
            'clientes' => ClienteResource::collection($this->whenLoaded('clientes')),
            'contratos' => ContratoResource::collection($this->whenLoaded('contratos')),
            'contas' => ContaResource::collection($this->whenLoaded('contas')),
            'aparelhos' => AparelhoResource::collection($this->whenLoaded('aparelhos'))
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstoqueResource extends JsonResource
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
            'aparelho_id' => $this->aparelho_id,
            'numero_cartao' => $this->numero_cartao,
            'conta_sky' => $this->conta_sky,
            'criado_em' => date('Y-m-d', strtotime($this->created_at)),
            'atualizado_em' => date('Y-m-d', strtotime($this->updated_at)),
            'aparelho' => new AparelhoResource($this->whenLoaded('aparelho'))
        ];
    }
}

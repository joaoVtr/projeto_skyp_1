<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AparelhoResource extends JsonResource
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
            'contrato_id' => $this->contrato_id,
            'modelo' => $this->modelo,
            'observacao' => $this->observacao,
            'contrato' => new ContratoResource($this->whenLoaded('contrato'))
        ];
    }
}

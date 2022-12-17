<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClienteContrato extends Model
{
    use HasFactory;

    protected $table = 'cliente_contratos';

    protected $fillable = [
        'cliente_id',
        'contrato_id',
        'conta_id',
        'aparelho_id',
        'logradouro',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'cartao',
        'numero',
        'numero_serie',
        'valor',
        'data_instalacao',
        'dia_vencimento',
        'observacao'
    ];

    public function clientes(): HasMany
    {
        return $this->hasMany(Cliente::class, 'id', 'cliente_id');
    }
    public function contratos(): HasMany
    {
        return $this->hasMany(Contrato::class, 'id', 'contrato_id');
    }
    public function contas(): HasMany
    {
        return $this->hasMany(Conta::class, 'id', 'conta_id');
    }
    public function aparelhos(): HasMany
    {
        return $this->hasMany(Aparelho::class, 'id', 'aparelho_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aparelho extends Model
{
    use HasFactory;

    protected $table = 'aparelhos';
    protected $fillable = [
        'contrato_id',
        'modelo',
        'observacao'
    ];

    public function contrato(): BelongsTo
    {
        return $this->belongsTo(Contrato::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estoque extends Model
{
    use HasFactory;

    protected $table = 'estoques';

    protected $fillable = [
        'aparelho_id',
        'numero_cartao',
        'conta_sky'
    ];

    public function aparelho(): BelongsTo
    {
        return $this->belongsTo(Aparelho::class);
    }
}

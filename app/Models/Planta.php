<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $fillable = [
        'nome_planta', 'umidade', 'solo_id',
    ];

    public function solo(): BelongsTo
    {
        return $this->belongsTo(Solo::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }
}

<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Solo extends Model
{
    protected $fillable = 
    [
        'tipo'
    ];

    public function plantas() : HasMany
    {
        return $this->hasMany(Planta::class);
    }
}

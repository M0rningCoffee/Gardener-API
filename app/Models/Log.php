<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'id_planta', 'estado', '_data',
    ];
}

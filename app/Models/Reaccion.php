<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaccion extends Model
{
    protected $table = 'likes'; // Forzar a usar la tabla 'likes'

    protected $fillable = [
        'juego_id',
        'user_id',
        'tipo',
    ];
}
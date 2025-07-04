<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios'; // Nombre de la tabla (opcional si se llama igual al modelo en plural)
    
    protected $fillable = [
        'contenido',
        'usuario_id',
        'juego_id',
        'fecha',
    ];

    // Relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    // Relación con el modelo Juego (si tienes uno)
    public function juego()
    {
        return $this->belongsTo(Juego::class, 'juego_id');
    }
}

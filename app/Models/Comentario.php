<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $primaryKey = 'ComentarioID';
    protected $table = 'Comentario';

    protected $fillable = [
        'MaterialID',
        'UsuarioID',
        'Comentario',
        'FechaComentario',
    ];

    public $timestamps = false;

    public function material()
    {
        return $this->belongsTo(MaterialEducativo::class, 'MaterialID');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'ComentarioID');
    }
}

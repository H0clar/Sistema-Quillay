<?php

// app/Models/Respuesta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $primaryKey = 'RespuestaID';
    protected $table = 'Respuesta';

    protected $fillable = [
        'ComentarioID',
        'UsuarioID',
        'Respuesta',
        'FechaRespuesta',
    ];

    public $timestamps = false;

    public function comentario()
    {
        return $this->belongsTo(Comentario::class, 'ComentarioID');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }
}

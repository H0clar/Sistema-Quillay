<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'UsuarioID'; // Clave primaria de la tabla

    // Define las propiedades (columnas) de la tabla
    protected $fillable = [
        'Nombre',
        'Apellido',
        'CorreoElectronico',
        'TipoUsuarioID',
        'AsignaturaID',
    ];

    // Define la relación con el tipo de usuario
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'TipoUsuarioID', 'TipoUsuarioID');
    }

    // Define la relación con la asignatura (puede ser opcional)
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'AsignaturaID', 'AsignaturaID');
    }
}

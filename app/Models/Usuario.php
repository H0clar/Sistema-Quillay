<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'UsuarioID'; // Clave primaria de la tabla
    public $timestamps = false;

    // Define las propiedades (columnas) de la tabla
    protected $fillable = [
        'Nombre',
        'Apellido',
        'CorreoElectronico',
        'Rut',
        'TipoUsuarioID',
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

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'CursoID', 'CursoID');
    }

    public function nivelEducativo()
    {
        return $this->belongsTo(NivelEducativo::class, 'NivelEducativoID', 'NivelEducativoID');
    }

    public function materialEducativo()
    {
        return $this->hasMany(MaterialEducativo::class, 'UsuarioID', 'UsuarioID');
    }

    // En tu modelo Usuario
    public function logs()
    {
        return $this->hasMany(Log::class, 'UsuarioID', 'UsuarioID');
    }

}

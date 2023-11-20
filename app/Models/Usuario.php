<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, Authenticatable;

    protected $table = 'Usuario'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'UsuarioID'; // Clave primaria de la tabla
    public $timestamps = false;

    // Define las propiedades (columnas) de la tabla
    protected $fillable = [
        'NombreUsuario',
        'ApellidoUsuario',
        'CorreoElectronico',
        'RutUsuario',
        'TipoUsuarioID',
        'Contrasena',
    ];

    // Define la relación con el tipo de usuario
    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'TipoUsuarioID', 'TipoUsuarioID');
    }

    // Define la relación con el asignatura (puede ser opcional)
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

    // Métodos para la autenticación manual
    public function getAuthIdentifierName()
    {
        return 'CorreoElectronico'; // Cambia a la columna correcta de identificación
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['CorreoElectronico']; // Cambia a la columna correcta de identificación
    }

    public function getAuthPassword()
    {
        return $this->attributes['Contrasena'];
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['Contrasena'] = Hash::make($value);
    }

    public function esProfesor()
    {
        // Lógica para determinar si el usuario es un profesor
        // Puedes basarte en el tipo de usuario u otras condiciones según tus necesidades.
        // Aquí, estoy asumiendo que tienes una columna 'TipoUsuarioID' que identifica a los profesores.

        return $this->tipoUsuario->NombreTipoUsuario == 'Profesor';
    }
}

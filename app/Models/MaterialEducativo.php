<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialEducativo extends Model
{
    protected $table = 'Material_Educativo';
    protected $primaryKey = 'MaterialID';
    public $timestamps = false;

    protected $fillable = [
        'TipoArchivo',
        'NombreArchivo',
        'ProfesorID',
        'AsignaturaID',
        'CursoID',
        'NivelEducativoID',
        'Estado',
        'Visible',
        'RutaGoogleDrive',
        'FechaSubida'
    ];

    // Define las relaciones aquí si es necesario

    public function profesor()
    {
        return $this->belongsTo(Usuario::class, 'ProfesorID');
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'AsignaturaID');
    }

    public function curso()
    {
        return $this->belongsTo(Cursos::class, 'CursoID');
    }

    public function nivelEducativo()
    {
        return $this->belongsTo(NivelEducativo::class, 'NivelEducativoID');
    }

    public function log()
    {
        return $this->hasMany(Log::class, 'MaterialID');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'MaterialID');
    }
}

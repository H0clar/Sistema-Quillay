<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'Asignatura';
    protected $primaryKey = 'AsignaturaID';
    public $timestamps = false;

    protected $fillable = ['Nombre', 'CursoID', 'Descripcion'];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'CursoID', 'CursoID');
    }

    public function nivel()
    {
        return $this->belongsTo(NivelEducativo::class, 'NivelEducativoID', 'NivelEducativoID');
    }

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'estudiante_asignatura', 'AsignaturaID', 'EstudianteID');
    }
}

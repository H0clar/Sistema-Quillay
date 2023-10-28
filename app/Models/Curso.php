<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id'; // Clave primaria de la tabla

    protected $fillable = ['nombre', 'descripcion', 'nivel_id']; // Campos asignables

    // Relación con la tabla NivelEducativo
    public function nivel()
    {
        return $this->belongsTo(NivelEducativo::class, 'nivel_id', 'id');
    }

    // Relación con la tabla Asignatura
    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class, 'curso_id', 'id');
    }

    // Otros métodos y relaciones

    // Por ejemplo, si deseas una relación con estudiantes, puedes agregarla aquí:
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'estudiante_curso', 'curso_id', 'estudiante_id');
    }
}

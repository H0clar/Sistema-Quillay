<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Curso extends Model
{
    protected $table = 'cursos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'CursoID'; // Clave primaria de la tabla
    public $timestamps = false;


    // Define los campos que pueden llenarse masivamente
    protected $fillable = [
        'Nombre', // Nombre de la columna en la base de datos
        'NivelEducativoID',
        'Abreviatura',
        // Agrega aquí más campos según tu estructura de datos
    ];

    // Si tienes relaciones con otros modelos, puedes definirlas aquí

    // Ejemplo de relación uno a muchos con el modelo Asignatura
    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class, 'CursoID', 'CursoID');
    }

    // Ejemplo de relación muchos a uno con el modelo NivelEducativo
    public function nivelEducativo()
    {
        return $this->belongsTo(NivelEducativo::class, 'NivelEducativoID', 'NivelEducativoID');
    }
}

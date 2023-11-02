<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'Cursos';
    protected $primaryKey = 'CursoID';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'NivelEducativoID',
        'Abreviatura',
    ];

    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class, 'CursoID', 'CursoID');
    }

    public function nivelEducativo()
    {
        return $this->belongsTo(NivelEducativo::class, 'NivelEducativoID', 'NivelEducativoID');
    }
}

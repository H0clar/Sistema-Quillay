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
        'UsuarioID',
        'AsignaturaID',
        'CursoID',
        'NivelEducativoID',
        'Estado',
        'Visible',
        'RutaGoogleDrive',
        'FechaSubida',
    ];

    public function profesor()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID', 'UsuarioID');
    }

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
}

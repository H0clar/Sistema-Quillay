<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialEducativo extends Model
{
    use HasFactory;

    protected $table = 'material_educativo';
    public $timestamps = false;


    protected $primaryKey = 'MaterialID';

    protected $fillable = [
        'TipoArchivoID',
        'NombreArchivo',
        'UsuarioID',
        'AsignaturaID',
        'CursoID',
        'NivelEducativoID',
        'Estado',
        'RutaGoogleDrive',
        'FechaSubida',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'UsuarioID', 'UsuarioID');
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

    public function tipoArchivo()
    {
        return $this->belongsTo(TipoArchivo::class, 'TipoArchivoID', 'TipoArchivoID');
    }
}

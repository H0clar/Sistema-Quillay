<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoArchivo extends Model
{
    protected $table = 'TipoArchivo';
    protected $primaryKey = 'TipoArchivoID';
    public $timestamps = false;

    protected $fillable = [
        'Tipo',
    ];

    public function materiales()
    {
        return $this->hasMany(MaterialEducativo::class, 'TipoArchivoID', 'TipoArchivoID');
    }

    
}

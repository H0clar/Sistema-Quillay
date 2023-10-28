<?php

// app/Models/NivelEducativo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelEducativo extends Model
{
    protected $table = 'Nivel_Educativo';
    protected $primaryKey = 'NivelEducativoID';
    public $timestamps = false;

    protected $fillable = ['Nombre', 'Abreviatura'];

    // Definir la relación con los materiales educativos
    public function material_educativo()
    {
        return $this->hasMany(MaterialEducativo::class, 'NivelEducativoID');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
    protected $table = 'Tipo_Cambio'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'TipoCambioID'; // Clave primaria de la tabla
    public $timestamps = false; // Desactiva las marcas de tiempo (created_at y updated_at)

    protected $fillable = ['TipoCambio']; // Lista de campos rellenables en la tabla

    // Define relaciones si es necesario
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'Log';
    protected $primaryKey = 'LogID';
    public $timestamps = false;

    protected $fillable = ['UsuarioID', 'MaterialID', 'TipoCambioID', 'FechaCambio'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID', 'UsuarioID');
    }

    public function material()
    {
        return $this->belongsTo(MaterialEducativo::class, 'MaterialID', 'MaterialID');
    }

    public function tipoCambio()
    {
        return $this->belongsTo(TipoCambio::class, 'TipoCambioID', 'TipoCambioID');
    }
}

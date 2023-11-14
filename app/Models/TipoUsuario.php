<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'TipoUsuario';
    protected $primaryKey = 'TipoUsuarioID';
    public $timestamps = false;

    protected $fillable = ['Tipo'];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'TipoUsuarioID', 'TipoUsuarioID');
    }
}

<?php

namespace Modules\Application\Entities;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuracion';

    protected $fillable = [
      'clave', 
      'valor',
      'valores_permitidos',
      'descripcion',
      'created_by',
      'updated_by'
    ];

    public function creador()
    {
        //TODO: hacer que no devuelva el campo password del ususario
        return $this->belongsTo('Modules\Authentication\Entities\Usuario','created_by');
    }
 
}

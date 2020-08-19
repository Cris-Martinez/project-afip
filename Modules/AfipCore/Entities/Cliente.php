<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $table = 'clientes';

  protected $fillable = [
		'nombre',
		'cuit',
		'domicilio',
		'telefono',
		'celular',
		'contacto',
		'email',
		'localidad_id',
		'categoria_iva_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

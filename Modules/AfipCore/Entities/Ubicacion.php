<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
  protected $table = 'ubicaciones';

  protected $fillable = [
		'nombre',
		'descripcion',
		'tipo_ubicacion_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

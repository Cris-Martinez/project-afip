<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductoUbicacion extends Model
{
  protected $table = 'producto_ubicaciones';

  protected $fillable = [
		'nombre',
		'producto_id',
		'ubicacion_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

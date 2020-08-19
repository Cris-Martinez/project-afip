<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
  protected $table = 'tipo_productos';

  protected $fillable = [
		'nombre',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

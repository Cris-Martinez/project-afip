<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoUbicacion extends Model
{
  protected $table = 'tipo_ubicaciones';

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

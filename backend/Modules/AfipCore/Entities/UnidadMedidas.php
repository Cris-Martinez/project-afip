<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class UnidadMedidas extends Model
{
  protected $table = 'unidad_medidas';

  protected $fillable = [
		'nombre',
		'simbolo',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoIva extends Model
{
  protected $table = 'tipo_ivas';

  protected $fillable = [
		'nombre',
		'porcentaje',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

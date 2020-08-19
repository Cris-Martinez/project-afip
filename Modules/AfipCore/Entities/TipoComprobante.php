<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoComprobante extends Model
{
  protected $table = 'tipo_comprobantes';

  protected $fillable = [
		'nombre',
		'signo',
		'nombre_corto',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

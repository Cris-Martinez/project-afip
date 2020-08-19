<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
  protected $table = 'presupuestos';

  protected $fillable = [
		'nombre',
		'fecha',
		'numero',
		'total',
		'neto',
		'iva',
		'exento',
		'cliente_id',
		'tipo_comprobante_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

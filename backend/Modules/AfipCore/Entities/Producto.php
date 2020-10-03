<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'productos';

  protected $fillable = [
		'nombre',
		'vencimiento',
		'costo',
		'precio',
		'bulto',
		'pieza',
		'stock_minimo',
		'tipo_producto_id',
		'tipo_iva_id',
		'unidad_medida_id',
		'created_by',
  ];

  protected $hiden = [
    // ...
    'created_by', 'updated_by', 'created_at', 'updated_at',
  ];

  public $validationObserverMessage = null;

}

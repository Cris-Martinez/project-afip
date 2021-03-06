<?php

namespace Modules\AfipCore\Entities;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
  protected $table = 'detalle_ventas';

  protected $fillable = [
		'nombre',
		'bulto',
		'pieza',
		'cantidad',
		'precio',
		'exento',
		'neto',
		'iva',
		'porcentaje_iva',
		'venta_id',
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

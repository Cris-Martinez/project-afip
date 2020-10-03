<?php

namespace Modules\AfipCore\Http\Controllers;

class DetalleVentaController extends AfipCoreController
{
  protected $className = 'DetalleVenta';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'bulto' => 'integer|required',
			'pieza' => 'integer|required',
			'cantidad' => 'numeric|required',
			'precio' => 'numeric|required',
			'exento' => 'numeric|required',
			'neto' => 'numeric|required',
			'iva' => 'numeric|required',
			'porcentaje_iva' => 'numeric|required',
			'venta_id' => 'integer|required',
			'producto_id' => 'integer|required',
			'ubicacion_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:detalle_ventas',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'bulto.integer' => 'El atributo BULTO error de formato.',
			'pieza.integer' => 'El atributo PIEZA error de formato.',
			'cantidad.float' => 'El atributo CANTIDAD error de formato.',
			'precio.float' => 'El atributo PRECIO error de formato.',
			'exento.float' => 'El atributo EXENTO error de formato.',
			'neto.float' => 'El atributo NETO error de formato.',
			'iva.float' => 'El atributo IVA error de formato.',
			'porcentaje_iva.float' => 'El atributo PORCENTAJE_IVA error de formato.',
			'venta_id.integer' => 'El atributo VENTA_ID error de formato.',
			'producto_id.integer' => 'El atributo PRODUCTO_ID error de formato.',
			'ubicacion_id.integer' => 'El atributo UBICACION_ID error de formato.',
			
      //...
  ]; 

}

<?php

namespace Modules\AfipCore\Http\Controllers;

class ProductoController extends AfipCoreController
{
  protected $className = 'Producto';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'vencimiento' => 'date|nullable|date_format:"Y-m-d"',
			'costo' => 'numeric|nullable',
			'precio' => 'numeric|nullable',
			'bulto' => 'integer|required',
			'pieza' => 'integer|required',
			'stock_minimo' => 'numeric|nullable',
			'tipo_producto_id' => 'integer|required',
			'tipo_iva_id' => 'integer|required',
			'unidad_medida_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:productos',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'vencimiento.date' => 'El atributo VENCIMIENTO error de formato.',
			'costo.float' => 'El atributo COSTO error de formato.',
			'precio.float' => 'El atributo PRECIO error de formato.',
			'bulto.integer' => 'El atributo BULTO error de formato.',
			'pieza.integer' => 'El atributo PIEZA error de formato.',
			'stock_minimo.float' => 'El atributo STOCK_MINIMO error de formato.',
			'tipo_producto_id.integer' => 'El atributo TIPO_PRODUCTO_ID error de formato.',
			'tipo_iva_id.integer' => 'El atributo TIPO_IVA_ID error de formato.',
			'unidad_medida_id.integer' => 'El atributo UNIDAD_MEDIDA_ID error de formato.',
			
      //...
  ]; 

}

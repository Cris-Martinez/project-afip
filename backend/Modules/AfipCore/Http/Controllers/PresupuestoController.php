<?php

namespace Modules\AfipCore\Http\Controllers;

class PresupuestoController extends AfipCoreController
{
  protected $className = 'Presupuesto';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'fecha' => 'date|required|date_format:"Y-m-d"',
			'numero' => 'integer|required',
			'total' => 'numeric|required',
			'neto' => 'numeric|required',
			'iva' => 'numeric|required',
			'exento' => 'numeric|required',
			'cliente_id' => 'integer|required',
			'tipo_comprobante_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:presupuestos',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'fecha.date' => 'El atributo FECHA error de formato.',
			'numero.integer' => 'El atributo NUMERO error de formato.',
			'total.float' => 'El atributo TOTAL error de formato.',
			'neto.float' => 'El atributo NETO error de formato.',
			'iva.float' => 'El atributo IVA error de formato.',
			'exento.float' => 'El atributo EXENTO error de formato.',
			'cliente_id.integer' => 'El atributo CLIENTE_ID error de formato.',
			'tipo_comprobante_id.integer' => 'El atributo TIPO_COMPROBANTE_ID error de formato.',
			
      //...
  ]; 

}

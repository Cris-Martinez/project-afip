<?php

namespace Modules\AfipCore\Http\Controllers;

class TipoComprobanteController extends AfipCoreController
{
  protected $className = 'TipoComprobante';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'signo' => 'integer|required',
			'nombre_corto' => 'string|required|max:10',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:tipo_comprobantes',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'signo.integer' => 'El atributo SIGNO error de formato.',
			'nombre_corto.string' => 'El atributo NOMBRE_CORTO error de formato.',
			'nombre_corto.max' => 'El atributo NOMBRE_CORTO tiene longitud maxima de 10 caracteres.',
			
      //...
  ]; 

}

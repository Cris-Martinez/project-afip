<?php

namespace Modules\AfipCore\Http\Controllers;

class TipoIvaController extends AfipCoreController
{
  protected $className = 'TipoIva';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'porcentaje' => 'numeric|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:tipo_ivas',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'porcentaje.float' => 'El atributo PORCENTAJE error de formato.',
			
      //...
  ]; 

}

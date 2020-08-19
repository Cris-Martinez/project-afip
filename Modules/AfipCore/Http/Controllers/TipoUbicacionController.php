<?php

namespace Modules\AfipCore\Http\Controllers;

class TipoUbicacionController extends AfipCoreController
{
  protected $className = 'TipoUbicacion';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:tipo_ubicaciones',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			
      //...
  ]; 

}

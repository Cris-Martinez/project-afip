<?php

namespace Modules\AfipCore\Http\Controllers;

class UnidadMedidasController extends AfipCoreController
{
  protected $className = 'UnidadMedidas';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'simbolo' => 'string|required|max:10',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:unidad_medidas',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'simbolo.string' => 'El atributo SIMBOLO error de formato.',
			'simbolo.max' => 'El atributo SIMBOLO tiene longitud maxima de 10 caracteres.',
			
      //...
  ]; 

}

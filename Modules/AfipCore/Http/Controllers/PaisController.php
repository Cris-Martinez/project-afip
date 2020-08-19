<?php

namespace Modules\AfipCore\Http\Controllers;

class PaisController extends AfipCoreController
{
  protected $className = 'Pais';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:40',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:paises',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 40 caracteres.',
			
      //...
  ]; 

}

<?php

namespace Modules\AfipCore\Http\Controllers;

class ProvinciaController extends AfipCoreController
{
  protected $className = 'Provincia';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:40',
			'pais_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:provincias',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 40 caracteres.',
			'pais_id.integer' => 'El atributo PAIS_ID error de formato.',
			
      //...
  ]; 

}

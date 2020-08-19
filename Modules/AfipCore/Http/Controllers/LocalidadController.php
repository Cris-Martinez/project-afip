<?php

namespace Modules\AfipCore\Http\Controllers;

class LocalidadController extends AfipCoreController
{
  protected $className = 'Localidad';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:40',
			'codigo_postal' => 'string|required|max:8',
			'provincia_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:localidades',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 40 caracteres.',
			'codigo_postal.string' => 'El atributo CODIGO_POSTAL error de formato.',
			'codigo_postal.max' => 'El atributo CODIGO_POSTAL tiene longitud maxima de 8 caracteres.',
			'provincia_id.integer' => 'El atributo PROVINCIA_ID error de formato.',
			
      //...
  ]; 

}

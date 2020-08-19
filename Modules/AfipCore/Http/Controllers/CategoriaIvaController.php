<?php

namespace Modules\AfipCore\Http\Controllers;

class CategoriaIvaController extends AfipCoreController
{
  protected $className = 'CategoriaIva';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'discrimina' => 'char|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:categoria_ivas',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'discrimina.char' => 'El atributo DISCRIMINA error de formato.',
			
      //...
  ]; 

}

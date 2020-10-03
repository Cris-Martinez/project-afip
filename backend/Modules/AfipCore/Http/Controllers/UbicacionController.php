<?php

namespace Modules\AfipCore\Http\Controllers;

class UbicacionController extends AfipCoreController
{
  protected $className = 'Ubicacion';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'descripcion' => 'string|nullable|max:80',
			'tipo_ubicacion_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:ubicaciones',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'descripcion.string' => 'El atributo DESCRIPCION error de formato.',
			'descripcion.max' => 'El atributo DESCRIPCION tiene longitud maxima de 80 caracteres.',
			'tipo_ubicacion_id.integer' => 'El atributo TIPO_UBICACION_ID error de formato.',
			
      //...
  ]; 

}

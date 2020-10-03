<?php

namespace Modules\AfipCore\Http\Controllers;

class ProductoUbicacionController extends AfipCoreController
{
  protected $className = 'ProductoUbicacion';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'producto_id' => 'integer|required',
			'ubicacion_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:producto_ubicaciones',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'producto_id.integer' => 'El atributo PRODUCTO_ID error de formato.',
			'ubicacion_id.integer' => 'El atributo UBICACION_ID error de formato.',
			
      //...
  ]; 

}

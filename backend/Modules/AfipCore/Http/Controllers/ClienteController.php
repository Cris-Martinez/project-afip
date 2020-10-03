<?php

namespace Modules\AfipCore\Http\Controllers;

class ClienteController extends AfipCoreController
{
  protected $className = 'Cliente';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
			'nombre' => 'string|required|max:80',
			'cuit' => 'string|required|max:11',
			'domicilio' => 'string|nullable|max:80',
			'telefono' => 'string|nullable|max:20',
			'celular' => 'string|nullable|max:20',
			'contacto' => 'string|nullable|max:80',
			'email' => 'email|nullable|max:80',
			'localidad_id' => 'integer|required',
			'categoria_iva_id' => 'integer|required',
			
      //...
  ];
  protected $insertValidations = [
			'nombre' => 'string|unique:clientes',
			
      //..
  ];

  protected $customValidationMessages = [
			'nombre.string' => 'El atributo NOMBRE error de formato.',
			'nombre.unique' => 'El atributo NOMBRE ya existe.',
			'nombre.max' => 'El atributo NOMBRE tiene longitud maxima de 80 caracteres.',
			'cuit.string' => 'El atributo CUIT error de formato.',
			'cuit.max' => 'El atributo CUIT tiene longitud maxima de 11 caracteres.',
			'domicilio.string' => 'El atributo DOMICILIO error de formato.',
			'domicilio.max' => 'El atributo DOMICILIO tiene longitud maxima de 80 caracteres.',
			'telefono.string' => 'El atributo TELEFONO error de formato.',
			'telefono.max' => 'El atributo TELEFONO tiene longitud maxima de 20 caracteres.',
			'celular.string' => 'El atributo CELULAR error de formato.',
			'celular.max' => 'El atributo CELULAR tiene longitud maxima de 20 caracteres.',
			'contacto.string' => 'El atributo CONTACTO error de formato.',
			'contacto.max' => 'El atributo CONTACTO tiene longitud maxima de 80 caracteres.',
			'email.string' => 'El atributo EMAIL error de formato.',
			'email.max' => 'El atributo EMAIL tiene longitud maxima de 80 caracteres.',
			'localidad_id.integer' => 'El atributo LOCALIDAD_ID error de formato.',
			'categoria_iva_id.integer' => 'El atributo CATEGORIA_IVA_ID error de formato.',
			
      //...
  ]; 

}

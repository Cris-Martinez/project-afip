<?php

namespace Modules\Modulo\Http\Controllers;

class EntidadController extends ModuloController
{
  protected $className = 'Entidad';
  protected $useUserAudit = true;

  protected $sendSlackNotificationOnInsert = false;
  protected $sendSlackNotificationOnUpdate = false;
  protected $sendSlackNotificationOnDelete = false;

  protected $generalValidations = [
      //...
  ];
  protected $insertValidations = [
      //..
  ];

  protected $customValidationMessages = [
      //...
  ]; 

}
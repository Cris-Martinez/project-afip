<?php

namespace Modules\Application\Http\Controllers;

use App\Http\Controllers\AppController as AppController;

class ApplicationController extends AppController
{
  protected $moduleEntityPath = 'Modules\\Application\\Entities';

  public function index()
  {
    return Response::json('Bienvenido al Modulo de Application.', 200);
  }
}
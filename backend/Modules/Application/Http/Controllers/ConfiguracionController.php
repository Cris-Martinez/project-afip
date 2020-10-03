<?php

namespace Modules\Application\Http\Controllers;

use Modules\Application\Entities\Configuracion as Configuracion; 
use Response;

class ConfiguracionController extends ApplicationController
{
  protected $moduleEntityPath = 'Modules\\Application\\Entities';
  protected $className = 'Configuracion';
  protected $useUserAudit = true;
  protected $generalValidations = [
    'clave' => 'required|unique:configuracion|max:255',
    'valor' => 'required',
    'descripcion' => 'required',
  ];

  public function index(){
    $list = Configuracion::where('clave','!=','sistema.template_de_permisos')->get();
    return Response::json($list);
  }

  public function getTemplatePermisosUsuarios(){
    $template = Configuracion::with('creador')
                ->TemplatePermisosUsuarios()
                ->get()
                ->first();
    return Response::json($template, 200);
  }
}

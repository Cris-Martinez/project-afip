<?php

namespace Modules\Application\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Application\Entities\Configuracion as Configuracion;

class ConfiguracionTableSeeder extends Seeder
{
  public function run()
  {
    Configuracion::create([
      'clave' => 'application.app_name',
      'valor' => 'GRUPO RENDACE',
      'valores_permitidos' => 'TEXTO',
      'descripcion' => 'Ferreteria Rendace',
      'created_by' => 1
    ]);

    Configuracion::create([
      'clave' => 'application.use_email_confirmation_for_new_users',
      'valor' => 'FALSE',
      'valores_permitidos' => 'TRUE | FALSE ',
      'descripcion' => 'Si esta opcion esta en TRUE se valida el email de los nuevos usuarios.',
      'created_by' => 1
    ]);

  }
}

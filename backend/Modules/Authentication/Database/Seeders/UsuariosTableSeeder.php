<?php

namespace Modules\Authentication\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Authentication\Entities\Usuario as Usuario;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
      Usuario::create([
          'id' => '1',
          'nombre' => 'super administrador',
          'role' => 'SUPER_ADMINISTRADOR',
          'email' => 'superadministrador@afip.com',
          'password' => '123',
          'confirmation_hash' => 'xxxxxxxxxx-xxxxxxxxxx-xxxxxxxxxx-001' 
      ]);

      Usuario::create([
          'id' => '2',
          'nombre' => 'administrador',
          'role' => 'ADMINISTRADOR',
          'email' => 'administrador@afip.com',
          'password' => '123',
          'confirmation_hash' => 'xxxxxxxxxx-xxxxxxxxxx-xxxxxxxxxx-002' 
      ]);

      Usuario::create([
          'id' => '3',
          'nombre' => 'usuario comun',
          'role' => 'USUARIO',
          'email' => 'usuario@afip.com',
          'password' => '123',
          'confirmation_hash' => 'xxxxxxxxxx-xxxxxxxxxx-xxxxxxxxxx-003' 
      ]);
      
    }
}

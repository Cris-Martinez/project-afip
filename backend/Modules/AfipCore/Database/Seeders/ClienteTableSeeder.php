<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\Cliente as Cliente;

class ClienteTableSeeder extends Seeder
{

    public function run()
    {
        Cliente::create([
            'id' => '1',
            'nombre' => 'Pierra Rashid Bou Farah' ,
            'cuit' => '99999999999',
            'domicilio' => 'san miguel 3000',
            'telefono' => '4235689',
            'celular' => '15478963',
            'contacto' => '381 15648792',
            'email' => 'rashid@afip.com',
            'localidad_id' => '1',
            'categoria_iva_id' => '1'
        ]);
    }
}

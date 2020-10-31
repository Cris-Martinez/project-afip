<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\Provincia as Provincia;

class ProvinciaTableSeeder extends Seeder
{
    public function run()
    {
        Provincia::create([
            'id' => '1',
            'nombre' => 'Tucuman', 
            'pais_id' => '1'
        ]);

        Provincia::create([
            'id' => '2',
            'nombre' => 'Santiago del Estero',
            'pais_id' => '1' 
        ]);

    }
}

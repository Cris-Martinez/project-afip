<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\Localidad as Localidad;


class LocalidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Localidad::create([
            'id' => '1',
            'nombre' => 'San Miguel de Tucuman',
            'codigo_postal' => '4000',
            'provincia_id' => '1'
        ]);

        Localidad::create([
            'id' => '2',
            'nombre' => 'Yerba Buena',
            'codigo_postal' => '4107',
            'provincia_id' => '1'
        ]);

        Localidad::create([
            'id' => '3',
            'nombre' => 'Yerba Buena',
            'codigo_postal' => '4172',
            'provincia_id' => '1'
        ]);

        Localidad::create([
            'id' => '4',
            'nombre' => 'Termas del Rio Hondo',
            'codigo_postal' => '4220',
            'provincia_id' => '2'
        ]);
    }
}

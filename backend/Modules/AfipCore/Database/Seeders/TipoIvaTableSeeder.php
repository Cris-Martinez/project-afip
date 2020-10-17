<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\TipoIva as TipoIva;

class TipoIvaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoIva::create([
            'id' => '1',
            'nombre' => 'IVA GENERAL',
            'porcentaje' => '0.21'
        ]);

        TipoIva::create([
            'id' => '2',
            'nombre' => 'IVA REDUCIDO',
            'porcentaje' => '0.10'
        ]);

        TipoIva::create([
            'id' => '3',
            'nombre' => 'IVA SUPERREDUCIDO',
            'porcentaje' => '0.04'
        ]);

    }
}

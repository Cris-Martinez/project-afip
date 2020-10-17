<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\UnidadMedidas as UnidadMedidas;

class UnidadMedidasTableSeeder extends Seeder
{
    public function run()
    {
        UnidadMedidas::create([
            'id' => '1',
            'nombre' => 'Metros' ,
            'simbolo' => 'Mts'
        ]);

        UnidadMedidas::create([
            'id' => '2',
            'nombre' => 'kilogramos' ,
            'simbolo' => 'kg'
        ]);

        UnidadMedidas::create([
            'id' => '3',
            'nombre' => 'Centimetros' ,
            'simbolo' => 'Cm'
        ]);
    }
}

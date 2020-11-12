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
            'nombre' => 'Metros' ,
            'simbolo' => 'Mts'
        ]);

        UnidadMedidas::create([
            'nombre' => 'kilogramos' ,
            'simbolo' => 'kg'
        ]);

        UnidadMedidas::create([
            'nombre' => 'Centimetros' ,
            'simbolo' => 'Cm'
        ]);
    }
}

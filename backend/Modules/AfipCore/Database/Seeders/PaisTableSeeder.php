<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\Pais as Pais;


class PaisTableSeeder extends Seeder
{
    public function run()
    {

        // Pais::create([
        //     'id' => '1',
        //     'nombre' => 'Argentina' 
        // ]);

        Pais::create([
            'nombre' => 'Colombia' 
        ]);

    }
}

<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\CategoriaIva as CategoriaIva;

class CategoriaIvaTableSeeder extends Seeder
{
    public function run()
    {
        CategoriaIva::create([
            'id' => '1',
            'nombre' => 'IVA Responzable Inscripto' ,
            'discrimina' => 'S'
        ]);
    }
}

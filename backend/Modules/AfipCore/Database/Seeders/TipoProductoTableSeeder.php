<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\TipoProducto as TipoProducto;

class TipoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoProducto::create([
            'id' => '1',
            'nombre' => 'Tipo Producto'
        ]);
    }
}

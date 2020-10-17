<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\Producto as Producto;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'id' => '1',
            'nombre' => 'Producto',
            'vencimiento' => '17/10/2020',
            'costo' => 50.8,
            'precio' => 40.2,
            'bulto' => 1,
            'pieza' => 1,
            'stock_minimo' => '40',
            'tipo_producto_id' => '1',
            'tipo_iva_id' => '1',
            'unidad_medida_id' => '1'
        ]);
    }
}

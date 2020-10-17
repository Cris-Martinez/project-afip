<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AfipCore\Entities\TipoComprobante as TipoComprobante;

class TipoComprobanteTableSeeder extends Seeder
{
    public function run()
    {
        TipoComprobante::create([
            'id' => '1',
            'nombre' => 'FACTURA A' ,
            'signo' => 10,
            'nombre_corto' => 'FAC A'
        ]);

        TipoComprobante::create([
            'id' => '2',
            'nombre' => 'FACTURA B' ,
            'signo' => 20,
            'nombre_corto' => 'FAC B'
        ]);

        TipoComprobante::create([
            'id' => '3',
            'nombre' => 'FACTURA C' ,
            'signo' => 30,
            'nombre_corto' => 'FAC C'
        ]);
    }
}

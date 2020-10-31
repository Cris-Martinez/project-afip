<?php

namespace Modules\AfipCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AfipCoreDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         //$this->call(PaisTableSeeder::class);
        // $this->call(ProvinciaTableSeeder::class);
         $this->call(LocalidadTableSeeder::class);
        //$this->call(CategoriaIvaTableSeeder::class);
        // $this->call(ClienteTableSeeder::class);
        // $this->call(TipoComprobanteTableSeeder::class);
        // $this->call(UnidadMedidasTableSeeder::class);
        // $this->call(TipoIvaTableSeeder::class);
        // $this->call(TipoProductoTableSeeder::class);
        // $this->call(ProductoTableSeeder::class);

        Model::reguard();

    }
}

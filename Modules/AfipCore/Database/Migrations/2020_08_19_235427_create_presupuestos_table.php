<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();

			$table->string('nombre')->unique()->comment('nombre:string:80:unique:fillable');
			$table->date('fecha')->comment('fecha:date:fillable');
			$table->integer('numero')->comment('numero:integer:fillable');
			$table->float('total')->comment('total:float:fillable');
			$table->float('neto')->comment('neto:float:fillable');
			$table->float('iva')->comment('iva:float:fillable');
			$table->float('exento')->comment('exento:float:fillable');
			$table->integer('cliente_id')->unsigned()->nullable();
			$table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->comment('cliente_id:references:clientes');
			$table->integer('tipo_comprobante_id')->unsigned()->nullable();
			$table->foreign('tipo_comprobante_id')->references('id')->on('tipo_comprobantes')->onDelete('cascade')->comment('tipo_comprobante_id:references:tipo_comprobantes');
			$table->boolean('habilitado')->default(true);
			// -- Audit Fields ------------------------
			$table->integer('created_by')->unsigned()->nullable();
			$table->foreign('created_by')->references('id')->on('usuarios')->onDelete('cascade');
			$table->integer('updated_by')->unsigned()->nullable();
			$table->foreign('updated_by')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_presupuestos', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('nombre')->unique()->comment('nombre:string:80:unique:fillable');
			$table->integer('bulto')->comment('bulto:integer:fillable');
			$table->integer('pieza')->comment('pieza:integer:fillable');
			$table->float('cantidad')->comment('cantidad:float:fillable');
			$table->float('precio')->comment('precio:float:fillable');
			$table->float('exento')->comment('exento:float:fillable');
			$table->float('neto')->comment('neto:float:fillable');
			$table->float('iva')->comment('iva:float:fillable');
			$table->float('porcentaje_iva')->comment('porcentaje_iva:float:fillable');
			$table->integer('presupuesto_id')->unsigned()->nullable();
			$table->foreign('presupuesto_id')->references('id')->on('presupuestos')->onDelete('cascade')->comment('presupuesto_id:references:presupuestos');
			$table->integer('producto_id')->unsigned()->nullable();
			$table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->comment('producto_id:references:productos');
			$table->integer('ubicacion_id')->unsigned()->nullable();
			$table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade')->comment('ubicacion_id:references:ubicaciones');
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
        Schema::dropIfExists('detalle_presupuestos');
    }
}

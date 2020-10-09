<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_ubicaciones', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('nombre')->unique()->comment('nombre:string:80:fillable:unique');
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
        Schema::dropIfExists('producto_ubicaciones');
    }
}

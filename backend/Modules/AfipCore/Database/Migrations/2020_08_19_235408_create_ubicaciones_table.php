<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->id();

			$table->string('nombre')->unique()->comment('nombre:string:80:fillable:unique');
			$table->string('descripcion')->nullable()->comment('descripcion:string:80:fillable:nullable');
			$table->integer('tipo_ubicacion_id')->unsigned()->nullable();
			$table->foreign('tipo_ubicacion_id')->references('id')->on('tipo_ubicaciones')->onDelete('cascade')->comment('tipo_ubicacion_id:references:tipo_ubicaciones');
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
        Schema::dropIfExists('ubicaciones');
    }
}

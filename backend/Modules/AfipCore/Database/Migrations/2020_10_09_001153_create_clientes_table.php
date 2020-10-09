<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('nombre')->unique()->comment('nombre:string:80:unique:fillable');
			$table->string('cuit')->comment('cuit:string:11:fillable');
			$table->string('domicilio')->nullable()->comment('domicilio:string:80:fillable:nullable');
			$table->string('telefono')->nullable()->comment('telefono:string:20:fillable:nullable');
			$table->string('celular')->nullable()->comment('celular:string:20:fillable:nullable');
			$table->string('contacto')->nullable()->comment('contacto:string:80:fillable:nullable');
			$table->string('email')->nullable()->comment('email:string:80:fillable:nullable');
			$table->integer('localidad_id')->unsigned()->nullable();
			$table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade')->comment('localidad_id:references:localidades');
			$table->integer('categoria_iva_id')->unsigned()->nullable();
			$table->foreign('categoria_iva_id')->references('id')->on('categoria_ivas')->onDelete('cascade')->comment('categoria_iva_id:references:categoria_ivas');
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
        Schema::dropIfExists('clientes');
    }
}

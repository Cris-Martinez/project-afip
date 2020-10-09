<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_ubicaciones', function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('nombre')->unique()->comment('nombre:string:80:fillable:unique');
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
        Schema::dropIfExists('tipo_ubicaciones');
    }
}

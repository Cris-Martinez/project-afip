<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave');
            $table->text('valor'); 
            $table->string('valores_permitidos'); 
            $table->string('descripcion');

            // -- Audit Fields ------------------------    
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('usuarios')->onDelete('cascade');

            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('usuarios')->onDelete('cascade');
            // -- END Audit Fields --------------------    

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
        Schema::dropIfExists('configuracion');
    }
}

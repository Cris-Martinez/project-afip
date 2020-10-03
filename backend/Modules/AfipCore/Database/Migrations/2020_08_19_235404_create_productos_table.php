<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

			$table->string('nombre')->unique()->comment('nombre:string:80:fillable:unique');
			$table->date('vencimiento')->nullable()->comment('vencimiento:date:fillable:nullable');
			$table->float('costo')->nullable()->comment('costo:float:fillable:nullable');
			$table->float('precio')->nullable()->comment('precio:float:fillable:nullable');
			$table->integer('bulto')->default(1)->comment('bulto:integer:default:1:fillable');
			$table->integer('pieza')->default(1)->comment('pieza:integer:default:1:fillable');
			$table->float('stock_minimo')->nullable()->comment('stock_minimo:float:fillable:nullable');
			$table->integer('tipo_producto_id')->unsigned()->nullable();
			$table->foreign('tipo_producto_id')->references('id')->on('tipo_productos')->onDelete('cascade')->comment('tipo_producto_id:references:tipo_productos');
			$table->integer('tipo_iva_id')->unsigned()->nullable();
			$table->foreign('tipo_iva_id')->references('id')->on('tipo_ivas')->onDelete('cascade')->comment('tipo_iva_id:references:tipo_ivas');
			$table->integer('unidad_medida_id')->unsigned()->nullable();
			$table->foreign('unidad_medida_id')->references('id')->on('unidad_medidas')->onDelete('cascade')->comment('unidad_medida_id:references:unidad_medidas');
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
        Schema::dropIfExists('productos');
    }
}

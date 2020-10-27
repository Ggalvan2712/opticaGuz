<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedBigInteger('tipo_producto_id');
            $table->string('nombre');
            $table->string('genero')->nullable();
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('estilo_id')->nullable();
            $table->string('uso')->nullable();
            $table->string('tipo')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('descripcion' , 1500);
            $table->decimal('precio');
            $table->string('imagen1')->default('public/default-img.png');
            $table->string('imagen2')->nullable();
            $table->boolean('EstaEliminado')->default(false);
            $table->timestamps();

            $table->foreign('tipo_producto_id')->references('id')->on('tipo_productos');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('estilo_id')->references('id')->on('estilos');
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

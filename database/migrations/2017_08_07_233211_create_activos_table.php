<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo');
            $table->double('peso');
            $table->double('talla');
            $table->double('ancho');
            $table->double('largo');
            $table->date('fechacompra');
            $table->date('fechabaja');
            $table->string('estado');
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
        Schema::drop('activos');
    }
}

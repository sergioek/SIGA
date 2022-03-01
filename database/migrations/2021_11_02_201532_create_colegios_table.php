<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->id();
            $table->enum('nivel',['Primario','Secundario','Superior']);
            $table->string('nombre');
            $table->string('direccion');
            $table->string('cue')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('rector')->nullable();
            $table->string('vicerrector')->nullable();
            
            //relacion con ciudades
            $table->unsignedBigInteger('ciudad_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
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
        Schema::dropIfExists('colegios');
    }
}

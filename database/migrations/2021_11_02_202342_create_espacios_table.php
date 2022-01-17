<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('turno',['MAÑANA','TARDE','MAÑANA-TARDE','NOCHE'])->nullable();
            $table->integer('horas')->nullable();

            //relacion con cursos 
           $table->unsignedBigInteger('curso_id');
           $table->foreign('curso_id')->references('id')->on('cursos');


              //relacion con carreras
            $table->unsignedBigInteger('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');

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
        Schema::dropIfExists('espacios');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_divisions', function (Blueprint $table) {
            $table->id();
            //relacion con inscripciones
            $table->unsignedBigInteger('inscripcion_id')->unique();
            $table->foreign('inscripcion_id')->references('id')->on('inscripcions');

            //ciclo
            $table->unsignedBigInteger('ciclo_id');
            $table->foreign('ciclo_id')->references('id')->on('ciclos');


             //relacion con curso
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
           
            //relacion con curso_divisions
            $table->unsignedBigInteger('grupo_id')->nullable();
            $table->foreign('grupo_id')->references('id')->on('curso_divisions');

        
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
        Schema::dropIfExists('asignar_divisions');
    }
}

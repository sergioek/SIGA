<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->enum('pase',['SI','NO']);
            $table->enum('repitente',['SI','NO']);
            $table->enum('documentacion_completa',['SI','NO']);
            $table->string('observaciones')->nullable();
            //relacion con ciclos
            $table->unsignedBigInteger('ciclo_id');
            $table->foreign('ciclo_id')->references('id')->on('ciclos');

            //relacion con curso
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');

             //relacion con alumnos
             $table->unsignedBigInteger('alumno_id');
             $table->foreign('alumno_id')->references('id')->on('alumnos');

              //relacion con tutores
            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('tutors');

             //relacion con parentezco
             $table->unsignedBigInteger('parentezco_id');
             $table->foreign('parentezco_id')->references('id')->on('parentezcos');

              //relacion con ocupaciones
            $table->unsignedBigInteger('ocupacion_id');
            $table->foreign('ocupacion_id')->references('id')->on('ocupacions');
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
        Schema::dropIfExists('inscripcions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificaciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->float('nota_1')->nullable();
            $table->float('nota_2')->nullable();
            $table->float('nota_fin')->nullable();
            $table->float('nota_dic')->nullable();
            $table->float('nota_feb')->nullable();
            $table->float('cal_def')->nullable();
            $table->enum('examen',['R','P','L','E','F'])->nullable();
            $table->string('establecimiento')->nullable();
            $table->string('observaciones')->nullable();

            //Relaciones con curso
            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');

            //Relaciones con carrera
            $table->unsignedBigInteger('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');
 
        
            //Relaciones con espacios
            $table->unsignedBigInteger('espacio_id');
            $table->foreign('espacio_id')->references('id')->on('espacios');

            //Relaciones con alumnos
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
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
        Schema::dropIfExists('clasificaciones');
    }
}

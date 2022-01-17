<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_divisions', function (Blueprint $table) {
            $table->id();

                  //relacion
                  $table->unsignedBigInteger('curso_id');
                  $table->foreign('curso_id')->references('id')->on('cursos');
      
                  //relacion con divisiones
                  $table->unsignedBigInteger('division_id');
                  $table->foreign('division_id')->references('id')->on('divisions');
      
                   //relacion con carreras
                   $table->unsignedBigInteger('carrera_id');
                   $table->foreign('carrera_id')->references('id')->on('carreras');

                   $table->string('preceptor');       

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
        Schema::dropIfExists('curso_divisions');
    }
}

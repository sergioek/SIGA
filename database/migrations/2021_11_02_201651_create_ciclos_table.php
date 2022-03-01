<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiclosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos', function (Blueprint $table) {
            $table->id();
            $table->char('ciclo',4)->unique();
            $table->string('lema')->nullable();
            $table->date('inicio')->nullable();
            $table->date('cierre')->nullable();
            $table->enum('estado',['ACTIVO','INACTIVO'])->default('ACTIVO');
            //relacion con colegios
            $table->unsignedBigInteger('colegio_id');
            $table->foreign('colegio_id')->references('id')->on('colegios');
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
        Schema::dropIfExists('ciclos');
    }
}

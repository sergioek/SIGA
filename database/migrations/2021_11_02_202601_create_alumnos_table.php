<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos');
            $table->string('nombres');
            $table->enum('nacionalidad',['ARG','COL','VEN','BRA','CHIL','URU','PER','OTRA']);
            $table->char('dni',9)->unique();  
            $table->char('cuil',14)->unique();
            $table->enum('sexo',['M','F','OTRO']);
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->string('direccion');
            $table->integer('legajo')->unique();
            $table->enum('discapacidad',['NO','SI']);
            $table->enum('tipo_discapacidad',['Física','Sensorial','Intelectual','Psíquica','Visceral','Múltiple'])->nullable();
            $table->enum('auh',['NO','SI']);
            $table->enum('obrasocial',['NO','SI']);
            $table->enum('baja',['SALIDO SIN PASE','SALIDO CON PASE','FALLECIMIENTO','CAMBIO DE TITULACIÓN'])->nullable();       
            $table->date('fecha_baja')->nullable();
            $table->string('observaciones_baja')->nullable();

             //relacion con ciudades
             $table->unsignedBigInteger('domicilio_id');
             $table->foreign('domicilio_id')->references('id')->on('ciudades');

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
        Schema::dropIfExists('alumnos');
    }
}

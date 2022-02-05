<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\Clasificaciones;

 //Comprobar si el alumno tiene las materias 2° del ciclo basico generadas
 $segundo=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',2);

 //Si no tiene las materias de 2°, generarlas
 if($segundo->isEmpty()){

     $espaciossegundos=Espacio::all()->where('curso_id',2)->where('carrera_id',1);

     foreach ($espaciossegundos as $espacio) {    
         $calificaciones=Clasificaciones::create([
         'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
         'espacio_id'=>$espacio->id,
         'carrera_id'=>1,
         'curso_id'=>2,
         ]);
     }
 }


?>
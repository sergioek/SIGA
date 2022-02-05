<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\Clasificaciones;

 //Comprobar si el alumno tiene las materias 4° del ciclo sup. en esa carrera generadas
 $cuarto=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',4)->where('carrera_id',$carrera);
        
 //Si no tiene las materias de 4° en esa carrera, generarlas
 if($cuarto->isEmpty()){

     $espacioscuarto=Espacio::all()->where('curso_id',4)->where('carrera_id',$carrera);

     foreach ($espacioscuarto as $espacio) {    
         $calificaciones=Clasificaciones::create([
         'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
         'espacio_id'=>$espacio->id,
         'carrera_id'=>$carrera,
         'curso_id'=>4,
         ]);
     }
 }

?>
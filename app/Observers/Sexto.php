<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\Clasificaciones;

//Comprobar si el alumno tiene las materias 6° del ciclo sup. en esa carrera generadas
$sexto=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',6)->where('carrera_id',$carrera);
                    
//Si no tiene las materias de 6° en esa carrera, generarlas
if($sexto->isEmpty()){
                                      
$espaciossexto=Espacio::all()->where('curso_id',6)->where('carrera_id',$carrera);
                                      
foreach ($espaciossexto as $espacio) {    
                                                             $calificaciones=Clasificaciones::create([
                                                             'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                                             'espacio_id'=>$espacio->id,
                                                             'carrera_id'=>$carrera,
                                                             'curso_id'=>6,
                                                             ]);
    }
}


?>
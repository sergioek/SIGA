<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\Clasificaciones;

//Comprobar si el alumno tiene las materias 5° del ciclo sup. en esa carrera generadas
$quinto=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',5)->where('carrera_id',$carrera);
                    
//Si no tiene las materias de 5° en esa carrera, generarlas
if($quinto->isEmpty()){
                                      
$espaciosquinto=Espacio::all()->where('curso_id',5)->where('carrera_id',$carrera);
                                      
foreach ($espaciosquinto as $espacio) {    
                                                             $calificaciones=Clasificaciones::create([
                                                             'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                                             'espacio_id'=>$espacio->id,
                                                             'carrera_id'=>$carrera,
                                                             'curso_id'=>5,
                                                             ]);
    }
}

?>
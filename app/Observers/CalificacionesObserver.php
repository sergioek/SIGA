<?php

namespace App\Observers;
use App\Models\Espacio;
use App\Models\CursoDivision;
use App\Models\AsignarDivision;
use App\Models\Clasificaciones;
class CalificacionesObserver
{

    public $afterCommit = true;
    /**
     * Handle the AsignarDivision "created" event.
     *
     * @param  \App\Models\AsignarDivision  $asignarDivision
     * @return void
     */
    public function created(AsignarDivision $asignarDivision)
    {
     

    }

    /**
     * Handle the AsignarDivision "updated" event.
     *
     * @param  \App\Models\AsignarDivision  $asignarDivision
     * @return void
     */
    public function updated(AsignarDivision $asignarDivision)
    {
        //Comrpobamos que se hizo un update en asignar divisiones y que grupo_id fue asignado un curso/division/carrera
        if ($asignarDivision->grupo_id!=null) {
            //consultar el curso/division de la inscripcion
            $consulta=CursoDivision::find($asignarDivision->grupo_id);
            //Determinar  carrera y curso a la que hace referencia 
            $carrera=$consulta->carrera_id;
            $curso=$consulta->curso_id;

            //1°
            if ($curso==1){
                include(app_path() . '\Observers\Primero.php');
            }

            //2°
            if ($curso==2){

                include(app_path() . '\Observers\Primero.php');
            
                include(app_path() . '\Observers\Segundo.php');
            }


             //3°
             if ($curso==3){
      
                include(app_path() . '\Observers\Primero.php');
            
                include(app_path() . '\Observers\Segundo.php');

                include(app_path() . '\Observers\Tercero.php');

            }



            //4°
            if ($curso==4){
                include(app_path() . '\Observers\Primero.php');
            
                include(app_path() . '\Observers\Segundo.php');

                include(app_path() . '\Observers\Tercero.php');

                include(app_path() . '\Observers\Cuarto.php');      
        
            }



            //5°
            if ($curso==5){
                include(app_path() . '\Observers\Primero.php');
            
                include(app_path() . '\Observers\Segundo.php');

                include(app_path() . '\Observers\Tercero.php');

                include(app_path() . '\Observers\Cuarto.php'); 

                include(app_path() . '\Observers\Quinto.php'); 

            }

            //6°
            if ($curso==6){
               
                include(app_path() . '\Observers\Primero.php');
            
                include(app_path() . '\Observers\Segundo.php');

                include(app_path() . '\Observers\Tercero.php');

                include(app_path() . '\Observers\Cuarto.php'); 

                include(app_path() . '\Observers\Quinto.php'); 

                include(app_path() . '\Observers\Sexto.php'); 
                
            }

            
        }///Fin...

  
    }

    /**
     * Handle the AsignarDivision "deleted" event.
     *
     * @param  \App\Models\AsignarDivision  $asignarDivision
     * @return void
     */
    public function deleted(AsignarDivision $asignarDivision)
    {
        //
    }

    /**
     * Handle the AsignarDivision "restored" event.
     *
     * @param  \App\Models\AsignarDivision  $asignarDivision
     * @return void
     */
    public function restored(AsignarDivision $asignarDivision)
    {
        //
    }

    /**
     * Handle the AsignarDivision "force deleted" event.
     *
     * @param  \App\Models\AsignarDivision  $asignarDivision
     * @return void
     */
    public function forceDeleted(AsignarDivision $asignarDivision)
    {
        //
    }
}

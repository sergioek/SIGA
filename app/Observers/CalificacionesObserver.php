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
       //aLGORITMO USADO PRIMERO EN UPDATE

       /*       //Comprobar si se asigno un valor a grupo_id
        if($asignarDivision->grupo_id!=null){

            //Comprobar si el alumno tiene las materias del ciclo basico generadas
            $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);
         
            if($primero->isEmpty()){
                   
                $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);
                $espaciossegundos=Espacio::all()->where('curso_id',2)->where('carrera_id',1);
   
                foreach ($espaciosprimeros as $espacio) {    
                    $calificaciones=Clasificaciones::create([
                    'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                    'espacio_id'=>$espacio->id,
                    'carrera_id'=>1,
                    'curso_id'=>1,
                    ]);
                }
   
                foreach ($espaciossegundos as $espacio) {    
                    $calificaciones=Clasificaciones::create([
                    'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                    'espacio_id'=>$espacio->id,
                    'carrera_id'=>1,
                    'curso_id'=>2,
                    ]);
                }
   
               }


            //consultar el curso/division de la inscripcion
            $consulta=CursoDivision::find($asignarDivision->grupo_id);
            //Determinar  carrera a la que hace referencia el curso/division de la inscripcion
            $carrera=$consulta->carrera_id;
       
            //Comprobar que la carrera sea distinta a 1, es decir pertenezca a alguna carrera del ciclo superior.
            if($carrera!=1){
                $tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('carrera_id',$carrera);
                //Si no esta inscripto a esa carrera, inscribirlo creando los registros en tablas tercero, cuarto quinto y sexto.
                if($tercero->isEmpty()){
                    $espaciosterceros=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);
                    $espacioscuartos=Espacio::all()->where('curso_id',4)->where('carrera_id',$carrera);
                    $espaciosquintos=Espacio::all()->where('curso_id',5)->where('carrera_id',$carrera);
                    $espaciossextos=Espacio::all()->where('curso_id',6)->where('carrera_id',$carrera);


                    foreach ($espaciosterceros as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>$carrera,
                        'curso_id'=>3,
                        ]);
                        }


                    foreach ($espacioscuartos as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>$carrera,
                        'curso_id'=>4,

                        ]);
                    }

                    foreach ($espaciosquintos as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>$carrera,
                        'curso_id'=>5,

                        ]);
                    }


                    foreach ($espaciossextos as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>$carrera,
                        'curso_id'=>6,
                        ]);
                    }

                }
            }


        } */

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
                //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);

                //Si no tiene las materias de 1°, generarlas
                if($primero->isEmpty()){

                    $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);

                    foreach ($espaciosprimeros as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>1,
                        'curso_id'=>1,
                        ]);
                    }
                }

            }

            //2°
            if ($curso==2){

                 //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                 $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);

                 //Si no tiene las materias de 1°, generarlas
                 if($primero->isEmpty()){
 
                     $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);
 
                     foreach ($espaciosprimeros as $espacio) {    
                         $calificaciones=Clasificaciones::create([
                         'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                         'espacio_id'=>$espacio->id,
                         'carrera_id'=>1,
                         'curso_id'=>1,
                         ]);
                     }
                 }

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

            }


             //3°
             if ($curso==3){
                //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);

                //Si no tiene las materias de 1°, generarlas
                if($primero->isEmpty()){

                    $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);

                    foreach ($espaciosprimeros as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>1,
                        'curso_id'=>1,
                        ]);
                    }
                }
                
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


                //Comprobar si el alumno tiene las materias 3° del ciclo sup. en esa carrera generadas
                $tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',3)->where('carrera_id',$carrera);

                //Si no tiene las materias de 3° en esa carrera, generarlas
                if($tercero->isEmpty()){
 
                    $espaciostercero=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);
 
                    foreach ($espaciostercero as $espacio) {    
                        $calificaciones=Clasificaciones::create([
                        'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                        'espacio_id'=>$espacio->id,
                        'carrera_id'=>$carrera,
                        'curso_id'=>3,
                        ]);
                    }
                }

           }



                    //3°
                    if ($curso==3){
                        //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                        $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);
        
                        //Si no tiene las materias de 1°, generarlas
                        if($primero->isEmpty()){
        
                            $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);
        
                            foreach ($espaciosprimeros as $espacio) {    
                                $calificaciones=Clasificaciones::create([
                                'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                'espacio_id'=>$espacio->id,
                                'carrera_id'=>1,
                                'curso_id'=>1,
                                ]);
                            }
                        }
                        
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
        
        
                        //Comprobar si el alumno tiene las materias 3° del ciclo sup. en esa carrera generadas
                        $tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',3)->where('carrera_id',$carrera);
        
                        //Si no tiene las materias de 3° en esa carrera, generarlas
                        if($tercero->isEmpty()){
         
                            $espaciostercero=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);
         
                            foreach ($espaciostercero as $espacio) {    
                                $calificaciones=Clasificaciones::create([
                                'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                'espacio_id'=>$espacio->id,
                                'carrera_id'=>$carrera,
                                'curso_id'=>3,
                                ]);
                            }
                        }
        
                   }

        
                    //4°
                    if ($curso==4){
                        //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                        $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);
        
                        //Si no tiene las materias de 1°, generarlas
                        if($primero->isEmpty()){
        
                            $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);
        
                            foreach ($espaciosprimeros as $espacio) {    
                                $calificaciones=Clasificaciones::create([
                                'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                'espacio_id'=>$espacio->id,
                                'carrera_id'=>1,
                                'curso_id'=>1,
                                ]);
                            }
                        }
                        
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
        
        
                        //Comprobar si el alumno tiene las materias 3° del ciclo sup. en esa carrera generadas
                        $tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',3)->where('carrera_id',$carrera);
        
                        //Si no tiene las materias de 3° en esa carrera, generarlas
                        if($tercero->isEmpty()){
         
                            $espaciostercero=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);
         
                            foreach ($espaciostercero as $espacio) {    
                                $calificaciones=Clasificaciones::create([
                                'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                'espacio_id'=>$espacio->id,
                                'carrera_id'=>$carrera,
                                'curso_id'=>3,
                                ]);
                            }
                        }


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
        
                   }



                                 //5°
                                 if ($curso==5){
                                    //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                                    $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);
                    
                                    //Si no tiene las materias de 1°, generarlas
                                    if($primero->isEmpty()){
                    
                                        $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);
                    
                                        foreach ($espaciosprimeros as $espacio) {    
                                            $calificaciones=Clasificaciones::create([
                                            'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                            'espacio_id'=>$espacio->id,
                                            'carrera_id'=>1,
                                            'curso_id'=>1,
                                            ]);
                                        }
                                    }
                                    
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
                    
                    
                                    //Comprobar si el alumno tiene las materias 3° del ciclo sup. en esa carrera generadas
                                    $tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',3)->where('carrera_id',$carrera);
                    
                                    //Si no tiene las materias de 3° en esa carrera, generarlas
                                    if($tercero->isEmpty()){
                     
                                        $espaciostercero=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);
                     
                                        foreach ($espaciostercero as $espacio) {    
                                            $calificaciones=Clasificaciones::create([
                                            'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                            'espacio_id'=>$espacio->id,
                                            'carrera_id'=>$carrera,
                                            'curso_id'=>3,
                                            ]);
                                        }
                                    }
            
            
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

                               }



                               

                                 //6°
                                 if ($curso==6){
                                    //Comprobar si el alumno tiene las materias 1° del ciclo basico generadas
                                    $primero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',1);
                    
                                    //Si no tiene las materias de 1°, generarlas
                                    if($primero->isEmpty()){
                    
                                        $espaciosprimeros=Espacio::all()->where('curso_id',1)->where('carrera_id',1);
                    
                                        foreach ($espaciosprimeros as $espacio) {    
                                            $calificaciones=Clasificaciones::create([
                                            'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                            'espacio_id'=>$espacio->id,
                                            'carrera_id'=>1,
                                            'curso_id'=>1,
                                            ]);
                                        }
                                    }
                                    
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
                    
                    
                                    //Comprobar si el alumno tiene las materias 3° del ciclo sup. en esa carrera generadas
                                    $tercero=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',3)->where('carrera_id',$carrera);
                    
                                    //Si no tiene las materias de 3° en esa carrera, generarlas
                                    if($tercero->isEmpty()){
                     
                                        $espaciostercero=Espacio::all()->where('curso_id',3)->where('carrera_id',$carrera);
                     
                                        foreach ($espaciostercero as $espacio) {    
                                            $calificaciones=Clasificaciones::create([
                                            'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                            'espacio_id'=>$espacio->id,
                                            'carrera_id'=>$carrera,
                                            'curso_id'=>3,
                                            ]);
                                        }
                                    }
            
            
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


                                                      //Comprobar si el alumno tiene las materias 6° del ciclo sup. en esa carrera generadas
                                                      $sexto=Clasificaciones::all()->where('alumno_id',$asignarDivision->inscripcion->alumno_id)->where('curso_id',6)->where('carrera_id',$carrera);
                    
                                                      //Si no tiene las materias de 6° en esa carrera, generarlas
                                                      if($sexto->isEmpty()){
                                       
                                                          $espaciosexto=Espacio::all()->where('curso_id',6)->where('carrera_id',$carrera);
                                       
                                                          foreach ($espaciosexto as $espacio) {    
                                                              $calificaciones=Clasificaciones::create([
                                                              'alumno_id'=>$asignarDivision->inscripcion->alumno_id,
                                                              'espacio_id'=>$espacio->id,
                                                              'carrera_id'=>$carrera,
                                                              'curso_id'=>6,
                                                              ]);
                                                          }
                                                      }

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

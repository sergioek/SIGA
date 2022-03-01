<?php

namespace App\Observers;

use App\Models\Inscripcion;
use App\Models\AsignarDivision;

class InscripcionObserver
{
    /**
     * Handle the Inscripcion "created" event.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return void
     */
    public $afterCommit = true;
    public function created(Inscripcion $inscripcion)
    {
        // si se crea una inscripcion, se crea un registro en asignar_divisions
        $asignar_division=AsignarDivision::create([
            'inscripcion_id'=>$inscripcion->id,
            'ciclo_id'=>$inscripcion->ciclo_id,
            'curso_id'=>$inscripcion->curso_id,

        ]);
    }

    /**
     * Handle the Inscripcion "updated" event.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return void
     */
   
    public function updated(Inscripcion $inscripcion)
    {
        // si se actualiza una inscripcion, se actualiza un registro en asignar_divisions
       $inscripcion->asignardivision()->update([
            'curso_id'=>$inscripcion->curso_id,
            'grupo_id'=>null,
       ]);

    }

    /**
     * Handle the Inscripcion "deleted" event.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return void
     */
    public function deleted(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Handle the Inscripcion "restored" event.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return void
     */
    public function restored(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Handle the Inscripcion "force deleted" event.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return void
     */
    public function forceDeleted(Inscripcion $inscripcion)
    {
        //
    }
}

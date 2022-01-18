<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Ciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CicloLectivo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   

     //buscando el ciclo activo en cache
     if (Cache::has('ciclo_activo')) {
        $ciclo=Cache::get('ciclo_activo');
     } else { 
          $ciclo=Ciclo::all()->where('estado','ACTIVO')->last();
        Cache::put('ciclo_activo',$ciclo,14400); 
    }

        if (empty($ciclo)) {
           return redirect()->route('ciclo.create')->with('Info','Debe inagurar un ciclo lectivo para realizar una inscripción.');
        } else {
             
            return $next($request);
        }
        
       
    }
}

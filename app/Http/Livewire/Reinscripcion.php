<?php

namespace App\Http\Livewire;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Tutor;
use App\Models\Alumno;
use Livewire\Component;
use App\Models\Ocupacion;
use App\Models\Parentezco;
use Illuminate\Support\Facades\Cache;

class Reinscripcion extends Component
{
    //Definiendo las propiedades
    public $dni;
    public $tutordni;
    public $ciclos;
    public $cursos;
    public $parentezcos;
    public $ocupaciones;


    public function mount(){
        //Buscando el ciclo lectivo activo 
        //buscando el ciclo activo en cache
        if (Cache::has('ciclo_activo')) {
            $this->ciclos=Cache::get('ciclo_activo');
        } else { 
            $this->ciclos=Ciclo::all()->where('estado','ACTIVO')->last();
            Cache::put('ciclo_activo', $this->ciclos,14400); 
        }

        //Buscando cache cursos
        if (Cache::has('cursos')) {
            $this->cursos=Cache::get('cursos');
        } else { 
            $this->cursos=Curso::all();
            Cache::put('cursos',$this->cursos,14400); 
        }
    
        //buscando si estan cargadas las ocupaciones 
        if (Cache::has('ocupaciones')) {
            $ocupaciones=Cache::get('ocupaciones');
        } else { 
           $ocupaciones=Ocupacion::all(); 
            Cache::put('ocupaciones',$ocupaciones,14400); 
        }

        //buscando si estan cargados en cache los parentezcos
        if (Cache::has('parentezcos')) {
            $parentezcos=Cache::get('parentezcos');
        } else { 
           $parentezcos=Parentezco::all(); 
            Cache::put('parentezcos',$parentezcos,14400); 
        }

        //Buscando cache alumnos
        if (Cache::has('alumnos')) {
            $alum=Cache::get('alumnos');
        } else { 
           $alum=Alumno::all();
            Cache::put('alumnos',$alum,14400); 
        }
        //Buscando cache tutores
        if (Cache::has('tutores')) {
            $tutores=Cache::get('tutores');
        } else { 
           $tutores=Tutor::all();
            Cache::put('tutores',$tutores,14400); 
        }

        //Asignando valores a las propiedades
        $this->parentezcos=$parentezcos;
        $this->ocupaciones=$ocupaciones;
        $this->alum=$alum;
        $this->tutor=$tutores;
    }
    
    public function render()
    {
        //busca alumnos, excepto los que tienen una baja
        $alumnos=$this->alum->where('dni',$this->dni)->where('baja',null);
        //busca tutotres
        $tutores=$this->tutor->where('tutordni',$this->tutordni);
        
        //Retorna a la vista 
        return view('livewire.reinscripcion',compact($this->ciclos,$this->cursos,$this->parentezcos,$this->ocupaciones,'alumnos','tutores'));
    }
}

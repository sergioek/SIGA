<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Tutor;
use Livewire\Component;
use App\Models\Ocupacion;
use App\Models\Parentezco;
use Illuminate\Support\Facades\Cache;

class InscripcionEdit extends Component
{
    //definiendo propiedades . $inscripcionID es la inscripcion que proviene de inscripcion.edit
    public $inscripcionID;
    public $tutordni;

    public function mount(){
        //Buscando ocupaciones 
        if (Cache::has('ocupaciones')) {
            $ocupaciones=Cache::get('ocupaciones');
        } else { 
           $ocupaciones=Ocupacion::all(); 
            Cache::put('ocupaciones',$ocupaciones,14400); 
        }

        //Buscando en cache parentezcos
        if (Cache::has('parentezcos')) {
            $parentezcos=Cache::get('parentezcos');
        } else { 
           $parentezcos=Parentezco::all(); 
            Cache::put('parentezcos',$parentezcos,14400); 
        }

        //Buscando en cache tutores, sino crearlo
        if (Cache::has('tutores')) {
            $tutores=Cache::get('tutores');
        } else { 
            $tutores=Tutor::all(); 
            Cache::put('tutores',$tutores,14400); 
        }

        //asignando valores a las propiedades
        $this->inscripcion=$this->inscripcionID;
        $this->cursos=$cursos=Curso::all();
        $this->tutor=$tutores;
        $this->parentezcos=$parentezcos;
        $this->ocupaciones=$ocupaciones;
      
    }

    public function render()
    {   //buscando el tutor de acuerdo al dni introducido por el usuario en la vista livewire
        $this->tutores=$this->tutor->where('tutordni',$this->tutordni);
        $tutoresSelect=$this->tutores;
      
        //retorna  a la vista
        return view('livewire.inscripcion-edit', [
            'parentezcos' => $this->parentezcos,
            'ocupaciones' => $this->ocupaciones,
            'cursos' => $this->cursos,
            'tutores' => $tutoresSelect,
            'inscripcion' => $this->inscripcion,
        ]);
    }
}

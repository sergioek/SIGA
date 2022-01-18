<?php

namespace App\Http\Livewire;

use App\Models\Ciclo;
use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CursoDivision;
use Illuminate\Support\Facades\Cache;
use App\Models\AsignarDivision as ModelsAsignarDivision;


class AsignarDivision extends Component
{
    //Definiendo propiedades
    public $search;
    public $cursos;
    public $divisiones;
    public $division;

        //usando la paginacion de bootstrap
        use WithPagination;
        protected $paginationTheme = 'bootstrap';
    
    
    
        public function updatingSearch()
        {   //
            $this->resetPage();
        }
        

    public function mount(){
        //Buscando datos

        //Buscando cache cursos
        if (Cache::has('cursos')) {
            $this->cursos=Cache::get('cursos');
        } else { 
            $this->cursos=Curso::all();
            Cache::put('cursos',$this->cursos,14400); 
        }

        $this->divisiones;
    }
    public function render()
    {
        //buscando el ciclo activo en cache
        if (Cache::has('ciclo_activo')) {
            $ciclo=Cache::get('ciclo_activo');
        } else { 
           $ciclo=Ciclo::all()->where('estado','ACTIVO')->last();
           Cache::put('ciclo_activo',$ciclo,14400); 
        }

        //Si hay un ciclo activo, se busca lo demas
        if(!empty($ciclo)){
            
        //Buscando el curso_id para mostrar las opciones de curso a asignar el la vista
        $this->divisiones=CursoDivision::all()->where('curso_id',$this->search);
        //Buscando todos los inscriptos que no tienen asignado una seccion (grupo_id null)
        $asignaciones=ModelsAsignarDivision::where('ciclo_id',$ciclo->id)->where('curso_id',$this->search)->where('grupo_id',null)->Paginate(10);
        
        }else{
            //Sino, se devuelve un array vacio
          $asignaciones=[];
          
        }
       
        //retornando la vista
        return view('livewire.asignar-division',compact($this->cursos,'asignaciones',$this->divisiones));
    }


    public function update(ModelsAsignarDivision $asignacion){
        $validateData=$this->validate([
            'division'=>'required|integer|exists:curso_divisions,id',
        ]);

        $asignacion->update([
            'grupo_id'=>$this->division,
        ]);

       

        session()->flash('MsjExito','Se asignó un curso y división a un alumno/a.');
    }
}

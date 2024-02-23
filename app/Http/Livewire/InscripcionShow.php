<?php

namespace App\Http\Livewire;

use App\Models\Ciclo;
use App\Models\Alumno;
use Livewire\Component;
use App\Models\Inscripcion;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Cache;
use function PHPUnit\Framework\isEmpty;

class InscripcionShow extends Component
{
    //usando la paginacion de bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //definiendo las propiedades
    public $search;
    public $filtro;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(){
        //Buscando los ciclos de modo desc en cache
        if (Cache::has('ciclos')) {
            $this->ciclos=Cache::get('ciclos');
        } else { 
            $this->ciclos=Ciclo::orderBy('ciclo','DESC')->get();
            Cache::put('ciclos',$this->ciclos,14400); 
        }
        
        //Buscando el ultimo ciclo
        $fil=Ciclo::all()->last();  
        //definiendo el id del ultimo ciclo ingresado
        $this->filtro=$fil->id;
    }

    public function render()
    {   
       //Buscando inscripciones de acuerdo al Nº de inscripcion
       $inscriptos=Inscripcion::where('id','like','%'.$this->search.'%')->where('ciclo_id',$this->filtro)->orderBy('curso_id','ASC')->Paginate(10);
        //Pasando ciclos
        $ciclos= $this->ciclos;
       
        //retorna a la vista
        return view('livewire.inscripcion-show',compact('inscriptos','ciclos'));
    }
}

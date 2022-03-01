<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;


class AlumnoShow extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    //definiendo las propiedades: search cuadro de busq , filtro alumnos en baja, etc
    public $search;
    public $filtro;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        //Si el filtro no se selecciono, se busca por el cuadro de busqueda
        if($this->filtro==null){
        
            $alumnos=Alumno::where('apellidos','like','%'.$this->search.'%')->orWhere('nombres','like','%'.$this->search.'%')->orWhere('dni','like','%'.$this->search.'%')->orWhere('legajo','like','%'.$this->search.'%')->Paginate(10);
    
     
        }else{  
            //Sino se filtra de acuerdo a lo seleccionado en el select

            $alumnos=Alumno::where('baja',$this->filtro)->Paginate(20);
        }
        //retorna a  la vista 
        return view('livewire.alumno-show',compact('alumnos'));
    }
}

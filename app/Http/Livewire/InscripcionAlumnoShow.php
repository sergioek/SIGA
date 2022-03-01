<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;

class InscripcionAlumnoShow extends Component
{
    //usando la paginacion de bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {   //mostrando la lista de alumnos.. luego se accedera a las   inscripciones de cada uno
        $alumnos=Alumno::where('apellidos','like','%'.$this->search.'%')->orWhere('nombres','like','%'.$this->search.'%')->orWhere('dni','like','%'.$this->search.'%')->orWhere('legajo','like','%'.$this->search.'%')->Paginate(10);
        
        //Retornando a la vista 
        return view('livewire.inscripcion-alumno-show',compact('alumnos'));
    }
}

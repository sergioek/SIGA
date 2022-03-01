<?php

namespace App\Http\Livewire;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;

class CalificacionesShow extends Component
{
    //usando la paginacion de bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {   //
        $this->resetPage();
    }
    
    public function render()
    {   
        //Buscando los alumnos para editar su calificacion
        $alumnos=Alumno::where('apellidos','like','%'.$this->search.'%')->orWhere('nombres','like','%'.$this->search.'%')->orWhere('dni','like','%'.$this->search.'%')->Paginate(10);
        //retorna la vista
        return view('livewire.calificaciones-show',compact('alumnos'));
    }
}

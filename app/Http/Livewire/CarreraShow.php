<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;
use Livewire\WithPagination;



class CarreraShow extends Component
{   //usando la paginacion de bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
    //Buscando las carreras 
       $carreras=Carrera::where('nombre','like','%'.$this->search.'%')->Paginate(10);
        //retorna  a la vista
        return view('livewire.carrera-show',compact('carreras'));
    }
}

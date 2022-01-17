<?php

namespace App\Http\Livewire;

use App\Models\Ciclo;
use Livewire\Component;
use Livewire\WithPagination;

class CicloShow extends Component
{
    //Usando la paginacion de bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {   //Buscando el ciclo 
        $ciclos=Ciclo::where('ciclo','like','%'.$this->search.'%')->Paginate(10);
        //retornando la vista
        return view('livewire.ciclo-show',compact('ciclos'));
    }
}

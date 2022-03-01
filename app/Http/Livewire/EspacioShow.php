<?php

namespace App\Http\Livewire;

use App\Models\Espacio;
use Livewire\Component;
use Livewire\WithPagination;

class EspacioShow extends Component
{
    //definiendo la paginacion de bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {   
        //Buscando los espacios
        $espacios=Espacio::where('nombre','like','%'.$this->search.'%')->Paginate(10);
        //Retorna a la vista 
        return view('livewire.espacio-show',compact('espacios'));
    }
}

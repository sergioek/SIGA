<?php

namespace App\Http\Livewire;

use App\Models\Tutor;
use Livewire\Component;
use Livewire\WithPagination;

class TutorShow extends Component
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
    {
        //buscando los tutores
        $tutores=Tutor::where('apellido','like','%'.$this->search.'%')->orWhere('nombre','like','%'.$this->search.'%')->orWhere('tutordni','like','%'.$this->search.'%')->Paginate(10);

        //retorna  a la vista 
        return view('livewire.tutor-show',compact('tutores'));
    }
}

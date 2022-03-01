<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CursoDivision;
use Illuminate\Support\Facades\DB;

class CursoShow extends Component
{   //Usando la paginacion bootstrap
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {   //Retornando los cursos_divisions
       $cursos=CursoDivision::where('curso_id','like','%'.$this->search.'%')->Paginate(10);
       
        //retorna a la vista
        return view('livewire.curso-show',compact('cursos'));
    }
}

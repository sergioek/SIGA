<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MembreteA4 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $ciclo;
    public $lema;
    public $nombre;
    public $nivel;
    public $cue;
    public $direccion;


    public function __construct($ciclo, $lema, $nombre,$cue,$nivel,$direccion)
    {
        $this->ciclo=$ciclo;
        $this->lema=$lema;
        $this->nombre=$nombre;
        $this->cue=$cue;
        $this->nivel=$nivel;
        $this->direccion=$direccion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.membrete-a4');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class boton-imprimir extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $href;
    public function __construct($href)
    {
        $href=$this->href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.boton-imprimir');
    }
}

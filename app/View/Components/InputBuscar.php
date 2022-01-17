<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputBuscar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $placeholder;   
   
    public function __construct($placeholder)
    {
        $this->placeholder=$placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-buscar');
    }
}

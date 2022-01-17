<?php

namespace App\View\Components;

use Illuminate\View\Component;

class membreteB4 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $ciclo;
    public $lema;
    public function __construct($ciclo, $lema)
    {
        $this->ciclo=$ciclo;
        $this->lema=$lema;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.membrete-b4');
    }
}

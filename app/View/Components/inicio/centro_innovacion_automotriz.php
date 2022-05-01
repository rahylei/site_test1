<?php

namespace App\View\Components\inicio;

use Illuminate\View\Component;

class centro_innovacion_automotriz extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inicio.centro_innovacion_automotriz');
    }
}

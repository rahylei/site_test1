<?php

namespace App\View\Components\layouts\oferta_academica;

use Illuminate\View\Component;

class plan_estudios extends Component
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
        return view('components.layouts.oferta_academica.plan_estudios');
    }
}

<?php

namespace App\View\Components\layouts\site;

use Illuminate\View\Component;

class sitios_interes extends Component
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
        return view('components.layouts.site.sitios_interes');
    }
}

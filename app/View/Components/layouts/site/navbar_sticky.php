<?php

namespace App\View\Components\layouts\site;
use App\Models\AcademicOfert;
use Illuminate\View\Component;

class navbar_sticky extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $ofertL;

    public function __construct(AcademicOfert $ofert)
    {
        $this->ofertL = $ofert->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.site.navbar_sticky');
    }
}

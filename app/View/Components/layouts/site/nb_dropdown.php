<?php

namespace App\View\Components\layouts\site;

use Illuminate\View\Component;

class nb_dropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $list;
    public function __construct($title, $list)
    {
        $this->title = $title;
        $this->list = $list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.site.nb_dropdown');
    }
}

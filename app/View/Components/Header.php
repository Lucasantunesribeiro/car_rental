<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * The title of the header.
     *
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @return void
     */
    public function __construct($title = 'Locadora de Carros')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}

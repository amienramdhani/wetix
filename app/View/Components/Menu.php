<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active)
    {
        //
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.menu', [
            'active' => $this->active
        ]);
    }
    public function list()
    {
        return [
            [
                'label' => 'Dashboard'
            ],
            [
                'label' => 'Movie'
            ],
            [
                'label' => 'Theaters'
            ],
            [
                'label' => 'Ticket'
            ],
            [
                'label' => 'User'
            ]
        ];
    }
    public function isActive($label)
    {
        return $label === $this->active;
    }
}

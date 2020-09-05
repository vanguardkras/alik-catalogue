<?php

namespace App\View\Components;

use App\MachineCategory;
use Illuminate\View\Component;

class NavBar extends Component
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
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $categories = MachineCategory::all();
        return view('components.nav-bar', compact('categories'));
    }
}

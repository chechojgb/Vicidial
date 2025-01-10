<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectDropdown extends Component
{
    public $title;
    public $options;
    public $selectedValue;
    

    /**
     * Create a new component instance.
     */
    public function __construct($title, $options, $selectedValue = null )
    {
        $this->title = $title;
        $this->options = $options;
        $this->selectedValue = $selectedValue;
   
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-dropdown');
    }
}

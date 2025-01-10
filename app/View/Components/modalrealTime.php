<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class modalrealTime extends Component
{
    public $allCampaigns;
    public $allUserGroups;
    public $allSelectInGroups;
    public $refreshRate;
    /**
     * Create a new component instance.
     */
    public function __construct($allCampaigns, $allUserGroups, $allSelectInGroups, $refreshRate)
    {
        $this->allCampaigns = $allCampaigns;
        $this->allUserGroups = $allUserGroups;
        $this->allSelectInGroups = $allSelectInGroups;
        $this->refreshRate = $refreshRate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-realTime');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class TabManagerAdmin extends Component
{
    public $activeTab;
    public function mount()
    {
        $this->activeTab = $this->determineActiveTab();
    }
    public function changeTab($route)
    {
        $this->activeTab = $route;
        return redirect()->route($route, ['route' => $route]);
    }
    private function determineActiveTab()
    {
        $currentRoute = request()->route()->getName();
        $validTabs = ['Dasboard-Admin', 'Users-Admin', 'Campaigns-Admin', 'Config-Admin', 'User-Group-Admin', 'List-Admin', 'Filter-Admin', 'Remote-Agents-Admin'];
        return in_array($currentRoute, $validTabs) ? $currentRoute : 'Dashboard-Admin';
    }
    public function render()
    {
        return view('livewire.tab-manager-admin');
    }
}

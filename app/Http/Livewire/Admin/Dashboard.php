<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Dashboard as MainDashboard;

class Dashboard extends MainDashboard
{
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}

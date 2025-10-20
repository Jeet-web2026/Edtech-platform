<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class Maincontent extends Component
{
    public function render()
    {
        $adminCount = User::where('type', 'admin')->count();
        return view('livewire.dashboard.maincontent', compact('adminCount'));
    }
}

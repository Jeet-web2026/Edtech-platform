<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class Maincontent extends Component
{
    public function render()
    {
        $adminCount = User::where('role', 'admin')->count();
        $enrollmentsCount = User::where('role', 'user')->count();
        $studentsCount = User::where('role', 'student')->count();
        return view('livewire.dashboard.maincontent', compact('adminCount', 'enrollmentsCount', 'studentsCount'));
    }
}

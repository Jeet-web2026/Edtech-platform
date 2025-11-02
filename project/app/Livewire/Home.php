<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $ourPartners = User::with(['adminDetails:id,user_id,profile'])
            ->where('role', 'admin')
            ->select('id', 'first_name', 'last_name')
            ->get();

        return view('livewire.home', compact('ourPartners'));
    }
}

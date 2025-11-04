<?php

namespace App\Livewire;

use App\Models\Homecontent;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $ourPartners = User::with(['adminDetails:id,user_id,profile'])
            ->where('role', 'admin')
            ->where('is_active', 1)
            ->select('id', 'first_name', 'last_name')
            ->get();

        $mainContent = Homecontent::select('heading', 'image', 'color')->firstOrFail();

        return view('livewire.home', compact('ourPartners', 'mainContent'));
    }
}

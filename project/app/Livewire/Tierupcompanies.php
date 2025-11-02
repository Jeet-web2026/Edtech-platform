<?php

namespace App\Livewire;

use Livewire\Component;

class Tierupcompanies extends Component
{
    public $partners;

    public function mount($partners)
    {
        $this->partners = $partners;
    }

    public function render()
    {
        return view('livewire.tierupcompanies');
    }
}

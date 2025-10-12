<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.auth.index');
    }

    #[Validate('required')]
    public $firstname = '';
    public function save() 
    {
        
    }
}

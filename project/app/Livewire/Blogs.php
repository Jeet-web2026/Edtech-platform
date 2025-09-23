<?php

namespace App\Livewire;

use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
        return view('livewire.blogs')->layout('components.layouts.app', [
            'title' => 'Blogs'
        ]);;
    }
}

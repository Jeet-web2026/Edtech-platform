<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Index extends Component
{
    public $firstname;
    public $lastname;
    public $email;

    protected $rules = [
        'firstname' => 'required|string|min:2|max:50',
        'lastname'  => 'required|string|min:2|max:50',
        'email'     => 'required|email|unique:users,email',
    ];


    public function submit()
    {
        $this->validate();

        User::create([
            'first_name' => $this->firstname,
            'last_name'  => $this->lastname,
            'email'      => $this->email,
            'password'   => Hash::make('password123'),
        ]);

        $this->reset(['firstname', 'lastname', 'email']);
        session()->flash('success', "Account created successfully! Login to continue.");
        $this->redirectRoute('login');
    }
    public function render()
    {
        return view('livewire.auth.index');
    }
}

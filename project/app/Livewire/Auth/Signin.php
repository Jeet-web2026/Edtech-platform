<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Signin extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required|string|min:6',
    ];

    public function check()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('dashboard', ['type' => Auth::user()->type]);
        } else {
            session()->flash('error', "Invalid credentials. Please try again.");
        }
        $this->reset(['email', 'password']);
    }

    public function render()
    {
        return view('livewire.auth.signin');
    }
}

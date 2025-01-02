<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

#[\Livewire\Attributes\Layout('layouts.guest')]
class Login extends Component
{
    public LoginForm $loginForm;

    public function login()
    {
        $this->loginForm->store();
    }

    public function render()
    {
        return view('livewire.login');
    }
}

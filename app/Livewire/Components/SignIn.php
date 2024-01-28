<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.login-layout', ['title' => 'Sign-in Page', 'form' => 'Sign In'])]
class SignIn extends Component
{
    public function render()
    {
        return view('livewire.sign-in');
    }
}

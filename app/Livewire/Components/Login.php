<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.login-layout', ['title' => 'Login Page', 'form' => 'Login'])]
class Login extends Component
{
    public $modal;
    public function mount($modal = false)
    {
        $this->$modal = $modal;
    }

    public function render()
    {
        return view('livewire.components.login');
    }
}

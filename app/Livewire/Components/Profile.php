<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.login-layout', ['title' => 'Set Profile', 'form' => 'Set your profile'])]
class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile');
    }
}

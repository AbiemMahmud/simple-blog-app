<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class SideMenu extends Component
{
    public User $user;
    public $active_id;

    public function mount($user = null, $active_id = 0)
    {
        $this->user = $user;
        $this->active_id = $active_id;
    }
    public function render()
    {
        return view('livewire.components.side-menu');
    }
}

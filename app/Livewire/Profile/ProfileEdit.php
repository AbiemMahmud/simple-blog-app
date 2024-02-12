<?php

namespace App\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ProfileEdit extends Component
{
    public $img;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $this->img = Storage::url($this->user->profile);
    }

    public function render()
    {
        return view('livewire.profile.profile-edit')->title($this->user->name);
    }
}

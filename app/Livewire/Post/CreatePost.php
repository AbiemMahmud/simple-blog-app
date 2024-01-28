<?php

namespace App\Livewire\Post;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = Auth::user();
    }
    public function render()
    {
        return view('livewire.post.create-post');
    }
}

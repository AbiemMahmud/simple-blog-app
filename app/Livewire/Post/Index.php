<?php

namespace App\Livewire\Post;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post')]
class Index extends Component
{
    public User $user;
    public $posts;

    public function mount()
    {
        $this->user = Auth::user();
        $this->posts = Post::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.post.index');
    }
}

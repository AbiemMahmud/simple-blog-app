<?php

namespace App\Livewire\Dashboard;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Index extends Component
{
    public $post_count, $comment_count, $like_count;
    public User $user;
    public $posts;

    public function mount()
    {
        $this->user = Auth::user();
        $this->posts = Post::all();
        $this->post_count = Post::where('user_id', Auth::id())->count();
        $this->comment_count = Comment::where('user_id', Auth::id())->count();
    }
    public function write()
    {
    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}

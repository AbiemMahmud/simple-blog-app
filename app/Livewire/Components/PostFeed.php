<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PostFeed extends Component
{
    public $post;

    public function mount($post = null)
    {
        $this->$post = $post;
    }
    public function readPost()
    {
        return redirect()->route('read', [
            'user' => $this->post->users->name,
            'id' => $this->post->id
        ]);
    }
    public function render()
    {
        return view('livewire.components.post-feed');
    }
}

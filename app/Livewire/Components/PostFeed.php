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
    public function render()
    {
        return view('livewire.components.post-feed');
    }
}

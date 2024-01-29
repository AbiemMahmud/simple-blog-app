<?php

namespace App\Livewire\Read;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\Component;


class ReadPost extends Component
{
    public $post, $content, $time;

    public function mount(Request $request)
    {
        $this->post = Post::find($request->input('id'));
        $this->time = date('F \of jS Y \a\t h:i:s A', strtotime($this->post->created_at));

        $content = $this->post->contents->content_text;
        $this->content = nl2br($content);
    }

    public function render()
    {
        return view('livewire.read.read-post')->title($this->post->title);
    }
}

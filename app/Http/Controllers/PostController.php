<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        //title, user_id, content, post_id
        // try {
        //     $request->validate([
        //         'title' => ['required', 'max:255'],
        //         'content' => ['required', 'max:65500']
        //     ]);

        //     $post = Post::create([
        //         'title' => $request['title'],
        //         'user_id' => Auth::id()
        //     ]);

        //     Content::create([
        //         'content_text' => $request['content']
        //     ]);

        //     return redirect()->route('post');
        // } catch (\Throwable $th) {
        //     return back()->withErrors('Unable to post');
        // }
        $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required', 'max:65500']
        ]);

        $post = Post::create([
            'title' => $request['title'],
            'user_id' => Auth::id()
        ]);

        Content::create([
            'content_text' => $request['content'],
            'post_id' => $post->id
        ]);

        return redirect()->route('post');
    }
}

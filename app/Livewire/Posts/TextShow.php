<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class TextShow extends Component
{
    public function render()
    {
        return view('livewire.posts.text-show',[
            'posts' => Post::query()->latest()->get()
        ]);
    }
}

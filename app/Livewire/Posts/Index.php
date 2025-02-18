<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[\Livewire\Attributes\Lazy('Posts')]
class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]
    public function updatedList($post){

    }
    public function render()
    {
        return view('livewire.posts.index',[
            'posts' => Post::query()->with('user')->latest()->get()
        ]);
    }

    public function placeholder(){
        return view('livewire.posts.placeholder');
    }
}

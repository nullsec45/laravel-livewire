<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Create extends Component
{
    public PostForm $postForm;

    public function save()
    {
        $post=$this->postForm->store();

        $this->dispatch('postCreated',$post->id);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}

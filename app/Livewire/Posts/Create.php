<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Create extends Component
{
    public PostForm $postForm;

    public function save()
    {
        $this->postForm->store();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}

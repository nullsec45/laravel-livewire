<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $post=Auth::user()->posts()->create($this->validate());


        flash('Post created sucessfully', 'success');

        $this->reset();

        return $post;
    }
}

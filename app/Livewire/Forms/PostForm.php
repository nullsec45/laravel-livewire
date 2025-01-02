<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $user = User::find(1);
        $validated = $this->validate();

        $user->posts()->create($validated);

        //    session()->flash('message','Post created sucessfully');
        flash('Post created sucessfully', 'success');

        $this->reset();
    }
}

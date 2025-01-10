<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Timeline')]
class Timeline extends Component
{
    public function render()
    {
        sleep(5);
        return view('livewire.timeline');
    }
}

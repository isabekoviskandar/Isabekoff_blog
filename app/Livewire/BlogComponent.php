<?php

namespace App\Livewire;

use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-component')->layout('components.layouts.userPage');
    }
}

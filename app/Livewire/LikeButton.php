<?php

namespace App\Livewire;

use Livewire\Component;

class LikeButton extends Component
{
    public int $likes = 0; // Default number of likes

    public function like()
    {
        $this->likes++; // Increment likes count
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}

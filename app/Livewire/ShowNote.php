<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;

class ShowNote extends Component
{
    public $note;

    public function mount($note)
    {
        $this->note = $note;
    }

    public function getNote()
    {
        return Entry::query()
            ->where('collection', 'notes')
            ->where('slug', $this->slug)
            ->first();
    }

    public function render()
    {
        return view('livewire.show-note', ['note' => $this->getNote()]);
    }
}
<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Entries\Entry;

class ShowNote extends Component
{
    public $note;

    public function mount($slug)
    {
        $note = Entry::query()
            ->where('collection', 'notes')
            ->where('slug', $slug)
            ->first();

        if (!$note) {
            abort(404);
        }

        $this->note = [
            'id' => $note->id(),
            'date' => $note->date()->format('M j, Y'),
            'slug' => $note->slug(),
            'title' => $note->get('title'),
            'content' => $note->get('content'),
        ];
    }

    public function render()
    {
        return view('livewire.show-note');
    }
}

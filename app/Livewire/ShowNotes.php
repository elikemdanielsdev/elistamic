<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;

class ShowNotes extends Component
{
    public $notes;

    public function mount()
    {
        $this->notes = Entry::whereCollection('notes')
            ->sortByDesc('date')
            ->map(fn($article) => $this->mapArticle($article));
    }

    private function mapArticle($article)
    {
        return [
            'id' => $article->id(),
            'date' => $article->date()->format('M j, Y'),
            'slug' => $article->slug(),
            'title' => $article->get('title'),
            'content' => $article->get('content'),
        ];
    }

    public function render()
    {
        return view('livewire.show-notes', ['notes' => $this->notes]);
    }
}

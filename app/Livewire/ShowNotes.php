<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;

class ShowNotes extends Component
{

  protected function entries()
  {
    return Entry::query()
      ->where('collection', 'notes')
      ->get();
  }

  public function render()
  {
    return view('livewire.show-notes', $this->entries());
  }
}

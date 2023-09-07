<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class CreateChirp extends Component {
  #[Rule('required|string|max:255')]
  public $message = '';

  public function render() {
    return view('livewire.create-chirp');
  }

  public function store() {
    $validated = $this->validate();
    auth()->user()->chirps()->create($validated);
    $this->reset();

    $this->dispatch('newChirpFormSubmitted');
  }
}

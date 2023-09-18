<?php

namespace App\Livewire\Chirps;

use App\Models\Chirp;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

class Edit extends Component {
  public $chirp;
  #[Rule('required|string|max:255')]
  public $message = '';

  #[On('edit-chirp-button')]
  public function load($id) {
    $chirp = Chirp::where('id', $id)->first();
    $this->chirp = $chirp;
    $this->message = $chirp->message;
    $this->render();
  }

  public function update() {
    $this->authorize('update', $this->chirp);
    $validated = $this->validate();
    $this->chirp->update($validated);
    $this->dispatch('chirp-updated');
  }

  public function render() {
    return view('livewire.chirps.edit');
  }
}

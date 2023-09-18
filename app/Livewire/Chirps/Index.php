<?php

namespace App\Livewire\Chirps;

use Livewire\Component;
use App\Models\Chirp;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Index extends Component {
  use WithPagination;

  #[On('newChirpFormSubmitted')]
  #[On('chirp-updated')]
  public function render() {
    $chirps = Chirp::with('user')->latest()->paginate(2);
    return view('livewire.chirps.index', [
      'chirps' => $chirps
    ]);
  }

  public function loadEditModal($id) {
    $this->dispatch('edit-chirp-button', id: $id);
  }
}
